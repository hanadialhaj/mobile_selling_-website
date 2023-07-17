<?php
session_start();
if(!isset($_SESSION["Username"])) {
    header('Location:login.php');
}

require '../init.php';

//if(isset($_POST['id'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $name_shop = $_POST['name_shop'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $des = $_POST['des'];


    $phone = $_POST['phone'];
    $whats = $_POST['whats'];
    $url_f = $_POST['url_f'];

    $old_img = $_POST['old_img'];


    $tag = $_POST['tag'];

    //$imgh=ereg_replace();

    $imgh=mberegi_replace("/","\\","$old_img");


    $sql = "";
    if (isset($_FILES['img'])) {
        $img = $_FILES['img'];



        $rand = rand();
        $path = "../images/" . $rand . $img['name'];
        copy($img['tmp_name'], $path);



        $sql = "UPDATE users SET name = '$name',name_shop = '$name_shop' ,address = '$address', pass = '$pass', des = '$des', tag='$tag',img = '$path',phone='$phone' ,mobile='$whats',url='$url_f' WHERE id = '$id'";

        unlink($imgh);


    }


    else {
        $sql = "UPDATE users SET name = '$name', name_shop = '$name_shop' , address = '$address', pass = '$pass', des = '$des', tag='$tag',phone='$phone' ,mobile='$whats',url='$url_f'  WHERE id = '$id'";}
    if (mysqli_query($con, $sql)) {

        echo "1";


    } else {

        echo "-1";

    }











//}
