<?php
session_start();
if(!isset($_SESSION["Username"])) {
    header('Location:login.php');
}

require '../init.php';



    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];






       $sql = "update admin set name = '$name', pass = '$pass' where id=$id";


    if (mysqli_query($con, $sql)) {
        echo "1";
    } else {
        echo "-1";

}