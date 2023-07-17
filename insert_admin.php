<?php
/**
 * Created by PhpStorm.
 * User: Hanadi
 * Date: 3/11/21
 * Time: 12:05 PM
 */
session_start();
if (isset($_SESSION['Username'])) {











    require('../init.php');

    // echo $id_admin;

    $name=$_POST['name'];
    $password = $_POST['pass'];









    $Today = date('Y-m-d');
    $new = date('Y-m-d', strtotime($Today));


    $sql="INSERT INTO admin(name, pass,date_insert)
 VALUES ('".$name."','".$password."','$new')";





    if(mysqli_query($con,$sql)){
        echo("تمت بنجاح");


    }else{
        echo("فشل");
    }
}else{
    header('Location: login.php');

    exit();
}




?>