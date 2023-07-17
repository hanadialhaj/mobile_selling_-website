
<?php
session_start();

require '../init.php';


if(!isset($_SESSION["Username"])) {
    header("location:login.php");
}
if($_SESSION['grope']=="1"){
    include('sidebar_admin.php');
}
else{
    include('sidebar.php');
}

$id_admin=$_SESSION['id'];
?>

<div class="container">
    <p style="margin-left:920px;font-size: x-large ">

    </p>
    <table class="table table-bordered table-hover" id="companies">
        <tr>
            <th >رقم المدير</th>
            <th>اسم المدير</th>
            <th>كلمة المرور</th>
            <th>تأريخ الإضافة </th>
            <th>تعديل</th>

        </tr>

        <?php


        $sql = "select * from admin where id=$id_admin ";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
               echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                         <td>$row[4]</td>

                        <td>
                        <a  class='1' href='#' onclick='edit()'>تعديل</a>


                         </td>


                    </tr>";
            }
        }

        ?>

    </table>

</div>
<!--  Script -->
<script
    src="../js/jquery.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<script>

    // //...... edit
    function edit() {

        $(document).unbind().on("click", ".1", function () {
            var currentRow = $(this).closest("tr");

            var id = currentRow.find("td:eq(0)").text();
            var name = currentRow.find("td:eq(1)").text();
            var pass = currentRow.find("td:eq(2)").text();


            localStorage.setItem('id', id);
            localStorage.setItem('name',name);
            localStorage.setItem('pass', pass);


            window.open("edit_profile.php", "_self");
        });
    }












</script>
<style>
    th{
        text-align: center;
        /*   color: #ffffff;
           background-color: #000000;
           border-color: #000000;*/

    }
    /*#companies td,tr{
        border-color: #ffffff;


    }*/
    #companies{
        text-align: center;
        margin-top: 100px;
        margin-right:100px;

    }
</style>
</body>
</html>