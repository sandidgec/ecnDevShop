<?php

require_once ("../../devshop.php");
require_once ("auto.php");



//// setup dsn and options
//$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
//$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
//
//
//// set up pdo connection with database and set error attributes
//$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//echo "connected to DB";

try {
    $assignment = new projectAssignment("100.25", null, null);
}catch (Exception $assignment) {
    echo $assignment->getMessage();
}

try {
    $assignment->insert($pdo);
}catch(Exception $a) {
    echo $e->getMessage();
}