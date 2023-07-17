<?php

session_start();
if(!isset( $_SESSION['Username'])) {
    header('Location:login.php');
}

if($_SESSION['grope']=="1"){
    include('sidebar_admin.php');
}
else{
    include('sidebar.php');
}

?>

    <!-- Body -->
    <div class="container body-content">

    </div>
            
</body>
</html>