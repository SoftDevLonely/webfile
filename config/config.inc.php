<?php
session_start();
ob_start();
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
error_reporting(~E_NOTICE);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Bangkok');
ini_set("memory_limit","256M");
$config = array('hostname' => 'localhost',
    'database' => 'lonely_db',
    'username' => 'root',
    'password' => '0826165190');
$con_mysqli = mysqli_connect($config['hostname'], $config['username'], $config['password'], $config['database']);
mysqli_query($con_mysqli, "SET NAMES UTF8");
if (!$con_mysqli) {
    $message = "Cannot connect to database..";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
