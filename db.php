<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);


$con->query("SET NAMES utf8");
$con->query("SET CHARACTER SET utf8");


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


*/?>

<?php
//max_execution_time = 50000;
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "onlineshop";

$con = mysqli_connect($host, $db_user, $db_password, $db_name);




$con->query("SET NAMES utf8");
$con->query("SET CHARACTER SET utf8");
?>