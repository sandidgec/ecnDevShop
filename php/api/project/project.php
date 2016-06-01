<?php
//require_once(dirname(dirname(__DIR__)) . "xsrf.php");
require_once(dirname(dirname(__DIR__)) . "/classes/project.php");
require_once(dirname(dirname(__DIR__)) . "/classes/dbconnect.php");

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
    // sanitize the projectId
    $projectId = filter_input(INPUT_GET, "projectId", FILTER_VALIDATE_INT);

    // Grab the mySQL connection
    // NOTE: This one is only used for Nginx servers
    $pdo = establishConn("/usr/share/nginx/ecn_dev_db.ini");
    // NOTE: This is the one you use for Apache web servers.
    //$pdo = establishConn("/etc/apache2/capstone-mysql/invtext.ini");

    // handle all RESTful calls to Project today
    // get some or all Users
    if($method === "GET") {
        // set an XSRF cookie on GET requests
        //setXsrfCookie("/");

        if (empty($projectId) === false) {
            $reply->data = Project::getProjectByProjectId($pdo, $projectId);

        } else {
            $reply->data = Project::getAllProjects($pdo);
        }
    }


        // post to a new Project
     else if($method === "POST") {
        // convert POSTed JSON to an object
        verifyXsrf();
        $requestContent = file_get_contents("php://input");
        $requestObject = json_decode($requestContent);


        // delete an existing Project
    } else if($method === "DELETE") {
        verifyXsrf();
        $project = Project::getProjectByProjectId($pdo, $projectId);
        $project->delete($pdo);
        $reply->data = "Project deleted OK";
        // put to an existing Project
    } else if($method === "PUT") {
        // convert PUTed JSON to an object
        verifyXsrf();
        $requestContent = file_get_contents("php://input");
        $requestObject = json_decode($requestContent);
        $project = new Project($projectId, $requestObject->endDate, $requestObject->startDate, $requestObject->title);
        $project->update($pdo);
        $reply->data = "Project updated OK";
    }

    // delete an existing Project

else if($method === "DELETE") {
    verifyXsrf();
    $project = Project::getProjectByProjectId($pdo, $projectId);
    $project->data = "Project deleted OK";
    // put to an existing Project
} else if($method === "PUT") {
    // convert PUTed JSON to an object
    verifyXsrf();
    $requestContent = file_get_contents("php://input");
    $requestObject = json_decode($requestContent);

    $project = new Project($projectId, $requestObject->endDate, $requestObject->startDate, $requestObject->title);
    $project->update($pdo);
    $reply->data = "Project updated OK";
}

    // create an exception to pass back to the RESTful caller
} catch(Exception $exception) {
    $reply->status = $exception->getCode();
    $reply->message = $exception->getMessage();
    unset($reply->data);
}
header("Content-type: application/json");
echo json_encode($reply);
