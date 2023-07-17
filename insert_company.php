<?php
/**
 * Created by PhpStorm.
 * User: Hanadi
 * Date: 3/11/21
 * Time: 12:05 PM
 */
session_start();
if (isset($_SESSION['Usershop'])) {











    require('../init.php');

    // echo $id_admin;

    $name=$_POST['name'];
    $password = $_POST['pass'];




    $id_us=$_SESSION['id'];






    $Today = date('Y-m-d');
    $new = date('Y-m-d', strtotime($Today));


    $sql2="select * from company where name='$name'";






    $result2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result2)>0){


        echo('هذا الإسم موجود بالفعل');

}
    else{
    $sql="INSERT INTO company(name, des,date_insert,id_user)
 VALUES ('".$name."','".$password."','$new','" . $id_us . "')";





    if(mysqli_query($con,$sql)){
        echo("تمت بنجاح");


    }else{
        echo("فشل");
    }
}}else{
    header('Location: login.php');

    exit();
}




?>