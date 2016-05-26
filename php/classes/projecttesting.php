<?php
require_once ("../../devshop.php");
require_once ("auto.php");






// setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");


// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$proj = new Project (null, "2016-05-15", "2016-05-23", "thisisaproject");



try {
    $proj->insert ($pdo);
    } catch(PDOException $exception) {
        echo $exception -> getMessage ();
}

/*
$proj->setStartDate ("2016-05-28");
var_dump($proj);
$proj->update ($pdo);
*/