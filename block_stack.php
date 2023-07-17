<?php
require('../init.php');

if(isset($_POST['id'])) {


    $id = $_POST['id'];
    $block = $_POST['block'];

    $sql = "update   users set block = '$block' WHERE id = '$id' ";
    if (mysqli_query($con, $sql)) {
        echo("تمت العملية بنجاح");
    } else {
        echo("فشل");
    }
}