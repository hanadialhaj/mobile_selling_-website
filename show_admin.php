<!--<link type="text/css"  rel="stylesheet" href="../css/table.css">-->
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

?>

<div class="container">

    <table class="table table-bordered table-hover" id="companies">
        <tr>
            <th >رقم المدير</th>
            <th>اسم المدير</th>
            <th>كلمة المرور</th>
            <th>تأريخ الإضافة </th>
            <th>تعديل</th>
            <th>حذف</th>
        </tr>

        <?php


        $sql = "select * from admin where group_id=0";
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

                         <td>
                          <a class='2' style='color: #f00' href='#' onclick='del()'>حذف</a>
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


            window.open("edit_admin.php", "_self");
        });
    }



    function del() {

  $(document).unbind().on("click",".2",function(){

  var currentRow=$(this).closest("tr");


  var id=currentRow.find("td:eq(0)").text();
      var sure=confirm("هل تريد حذف الموظف");
      if(sure===true){


  $.ajax({
  type: "POST",
  data: {id:id},
  url: "delete_admin.php",
  success: function(data){
  alert(data);

      window.open("show_admin.php", "_self");
  }
  });
      }else{
       return;
      }
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