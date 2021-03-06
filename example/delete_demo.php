<?php

// include pdo helper class to use common methods
require_once '../src/Helper/PDOHelper.php';
// include pdo class wrapper
require_once '../src/class.pdowrapper.php';

// database connection setings
$dbConfig = ['host' => 'localhost', 'dbname' => 'sampledb', 'username' => 'root', 'password' => ''];
// get instance of PDO Wrapper object
$db = new PdoWrapper($dbConfig);

// get instance of PDO Helper object
$helper = new PDOHelper();

// set error log mode true to show error on screen or false to log in log file
$db->setErrorLog(true);

// Example -1

// where condition array
$aWhere = ['age' => 35];
// call update function
$q = $db->delete('test', $aWhere)->showQuery()->affectedRows();
// print affected rows
PDOHelper::PA($q);

// Example -2

// where condition array
$aWhere = ['age' => 45, 'first_name' => 'Sonu'];
// call update function
$q = $db->delete('test', $aWhere)->showQuery()->affectedRows();
// print affected rows
PDOHelper::PA($q);
