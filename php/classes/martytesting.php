<?php

require_once ("../../devshop.php");
require_once ("dateValidation.php");
require_once ("employee.php");






 //setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$salt="3b2833ce331050deb3bca56f2e5453ac6091c0031267677993fe1ba57702c109";
$hash="5fa3df4d20b51448120c978f0124d3475e143111db7517428e9820eb1f486c02d274d9693c45d020c52c20cb6e0ccf71498fa8a312f999fb83297f56b71e9518";
/*

try {
    $emp = new Employee(null, 'ROOT', "po box 2073", "5 miles NE on HWY 264 RA#615D", "Window Rock", "martetab1@gmail.com", "marieta", $hash, "buck",
        "9287971419", $salt, "AZ", "full time", "86515");
}catch(Exception $exp) {
    echo $exp->getMessage();
}

try {
	$emp->insert($pdo);
}catch(Exception $e) {
	echo $e->getMessage();
}
*/


/*
$emp->setCity("farmington");
$emp->setState("NM");

try {
    $emp->update($pdo);
}catch (Exception $e) {
    echo $e->getMessage();
}


*/

//$emp->delete($pdo);
/*
$empl = Employee::getEmployeeByEmployeeId($pdo, 3);

var_dump($empl);
*/
/*
$employee = Employee::getEmployeeByEmail($pdo, "marty@marty.com");
var_dump($employee);
*/

$employeelist = Employee::getAllEmployee($pdo);
var_dump($employeelist);




