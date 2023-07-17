<?php
session_start();
include '../init.php';




if(!isset( $_SESSION['Username'])) {
    header('Location:login.php');
}
$id=$_POST['id'];





$sql="delete  from users   WHERE id='$id'                       ";

if(mysqli_query($con,$sql)){
    echo("تمت العملية بنجاح");
}else{
    echo("فشل");
}

?>

