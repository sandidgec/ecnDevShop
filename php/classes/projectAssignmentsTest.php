<?php

require_once ("../../devshop.php");
require_once ("dateValidation.php");
require_once ("projectAssignment.php");



//setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "here";
//
//$pa = new ProjectAssignment(14, 2, 200.36);
//
//var_dump($pa);
//
//try {
//$pa->insert($pdo);
//} catch (Exception $e) {
//    echo $e->getMessage();
//}

//$pa->setEmployAlot(1984.33);
//
//try {
//    $pa->update($pdo);
//}catch (Exception $e) {
//    echo $e->getMessage();
//}

//$pa = new ProjectAssignment(14, 2, 200.36);
//
//$pa->delete($pdo);
//
//$pad = ProjectAssignment::getProjectAssignmentByProjectId ($pdo, 14);
//$p = ProjectAssignment::getProjectAssignmentByEmployeeId($pdo, 2);
//
//var_dump($pad);
//var_dump($p);


//$assignmentList = ProjectAssignment::getAllProjectAssignments($pdo);
//var_dump($assignmentList);

//$projectassignmentList = ProjectAssignment::getAllProjects($pdo);
//var_dump($projectassignmentlist);
//
//$projectassignmentList = ProjectAssignment::getAllEmployees($pdo);
//var_dump($projectassignmentlist);



