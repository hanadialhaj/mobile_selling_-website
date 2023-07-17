<?php
require('../init.php');

if(isset($_POST['id'])) {


    $id = $_POST['id'];
    $view = $_POST['block'];

    $sql = "update   users set group_id = '$view' WHERE id = '$id' ";
    if (mysqli_query($con, $sql)) {
        echo("تمت العملية بنجاح");
    } else {
        echo("فشل");
    }
}