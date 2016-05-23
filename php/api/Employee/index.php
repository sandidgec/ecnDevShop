<?php
require_once(dirname(dirname(__DIR__)) . "/classes/autoload.php");
require_once(dirname(dirname(__DIR__)) . "/lib/xsrf.php");
require_once("/etc/apache2/data-design/encrypted-config.php");

// start the session and create a XSRF token
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// prepare an empty reply
$reply = new stdClass();
$reply->status = 200;
$reply->data = null;

try {
    // determine which HTTP method was used
    $method = array_key_exists("HTTP_X_HTTP_METHOD", $_SERVER) ? $_SERVER["HTTP_X_HTTP_METHOD"] : $_SERVER["REQUEST_METHOD"];

    // sanitize the userId
    $userId = filter_input(INPUT_GET, "userId", FILTER_VALIDATE_INT);

    // sanitize the email
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);


    // grab the mySQL connection
    $pdo = connectToEncryptedMySql("/etc/apache2/capstone-mysql/invtext.ini");

    // handle all RESTful calls to User today
    // get some or all Employee
    if($method === "GET") {
        // set an XSRF cookie on GET requests
        setXsrfCookie("/");
        if(empty($employeeId) === false) {
            $reply->data = Employee::getEmployeeByEmployeeId($pdo, $employeeId);
        } else if(empty($email) === false) {
            $reply->data = Employee::getEmployeeByEmail($pdo, $email);
        } else {
            $reply->data = Employee::getAllEmployee($pdo);
        }


        // post to a new Employee
    } else if($method === "POST") {
        // convert POSTed JSON to an object
        verifyXsrf();
        $requestContent = file_get_contents("php://input");
        $requestObject = json_decode($requestContent);

        if($requestObject->password !== $requestObject->passwordConfirm) {
            throw(new InvalidArgumentException("passwords do not match", 400));
        }

        $salt = bin2hex(openssl_random_pseudo_bytes(32));
        $hash = hash_pbkdf2("sha512", $requestObject->password, $salt, 262144, 128);

        // handle optional fields
        $attention = (empty($requestObject->attention) === true ? null : $requestObject->attention);
        $addressLineTwo = (empty($requestObject->addressLineTwo) === true ? null : $requestObject->addressLineTwo);

        $employee = new Employee($employeeId, $requestObject->lastName, $requestObject->firstName, false, $attention,
            $requestObject->addressLineOne, $addressLineTwo, $requestObject->city, $requestObject->state,
            $requestObject->zip, $requestObject->email, $requestObject->phone, $salt, $hash);
        $employee->insert($pdo);
        $_SESSION["employee"] = $employee;
        $reply->data = "Employee created OK";

        // delete an existing Employee
    } else if($method === "DELETE") {
        verifyXsrf();
        $employee = Employee::getEmployeeByEmployeeId($pdo, $employeeId);
        $employee->delete($pdo);
        $reply->data = "Employee deleted OK";

        // put to an existing Employee
    } else if($method === "PUT") {
        // convert PUTed JSON to an object
        verifyXsrf();
        $requestContent = file_get_contents("php://input");
        $requestObject = json_decode($requestContent);
        $salt = bin2hex(openssl_random_pseudo_bytes(32));
        $hash = hash_pbkdf2("sha512", $requestObject->password, $salt, 262144, 128);

        $employee = new Employee($employeeId, $requestObject->lastName, $requestObject->firstName, $requestObject->root, $requestObject->attention,
            $requestObject->addressLineOne, $requestObject->addressLineTwo, $requestObject->city, $requestObject->state,
            $requestObject->zip, $requestObject->email, $requestObject->phone, $salt, $hash);
        $employee->update($pdo);
        $reply->data = "Employee updated OK";
    }
    // create an exception to pass back to the RESTful caller
} catch(Exception $exception) {
    $reply->status = $exception->getCode();
    $reply->message = $exception->getMessage();
    unset($reply->data);
}
header("Content-type: application/json");
echo json_encode($reply);