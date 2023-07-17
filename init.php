<?php
//max_execution_time = 50000;
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "onlineshop";

$con = mysqli_connect($host, $db_user, $db_password, $db_name);

include_once "php-export-data.class.php";
include_once "excel/PHPExcel/IOFactory.php";


$con->query("SET NAMES utf8");
$con->query("SET CHARACTER SET utf8");
