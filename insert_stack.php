<?php
session_start();
if(!isset($_SESSION["Username"])) {
    header("location:login.php");
}
require('../init.php');
if(isset($_POST['name'])) {

    $name = $_POST['name'];
    $name_shop = $_POST['name_shop'];
    $password = $_POST['password'];
    $des = $_POST['des'];
    $address = $_POST['address'];
    $tag = $_POST['tag'];


    $phone = $_POST['phone'];
    $whats = $_POST['whats'];
    $url_f = $_POST['url_f'];


    $img = $_FILES['file'];
    $id_admin=$_SESSION['id'];

    $Today = date('Y-m-d');
    $new = date('Y-m-d', strtotime($Today));

    $rand = rand();
    $path = "../images/" . $rand . $img['name'];
    copy($img['tmp_name'], $path);



    $sql = "INSERT INTO users(name, pass,name_shop, des, address,tag,img,id_admin,phone,mobile,url,date_insert)
    VALUES ('" . $name . "' ,'" . $password . "' ,'" . $name_shop . "' ,'" . $des . "','" . $address . "','" . $tag . "','" . $path . "','" . $id_admin . "','" . $phone . "','" . $whats . "','" . $url_f . "','$new')";

    if (mysqli_query($con, $sql)) {
        echo "1";
    } else {
        // echo "-1";
        echo("فشل".mysqli_error($con));
    }
}