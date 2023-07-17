<meta charset="utf-8"/>

<?php

session_start();
/*if (isset($_SESSION['Username'])) {
    header('Location: dashboard.php'); // Redirect To Dashboard Page
}*/
require('../init.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset ($_POST["submit"])){
        $username = $_POST['name'];
        $password = $_POST['pass'];

        $sql="SELECT * from admin where name = '$username'    AND  Pass = '$password' AND group_id=1";

        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);


            $_SESSION['Username'] = $username; // Register Session Name
            $id= $row['id'];
            $_SESSION['id'] =$id;
            $_SESSION['grope']=$row['group_id'];






            header('Location:index.php');

        }

//}
        $sql="SELECT * from admin where name = '$username'    AND  Pass = '$password' AND group_id=0";






        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);


            $_SESSION['Username'] = $username; // Register Session Name
            $id= $row['id'];
            $_SESSION['id'] =$id;
            $_SESSION['grope']=$row['group_id'];

            // $_SESSION['id'] = $row[id]; // Register Session ID



            header('Location: index.php');

        }

//}
        else{
            echo "<script>

        alert('اسم المستخدم او كلمة المرور خاطئة');

      </script>

      ";
            header('refresh:.001 ; login.php');

        }
//echo json_encode($response);
    }}
?>