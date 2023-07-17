
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
    <p style="margin-left:920px;font-size: x-large ">
       <!-- <a href="add_user.php">إضافة  متجر </a>-->
    </p>
    <table class="table table-bordered table-hover" id="companies">
        <tr>
            <th  hidden="hidden">رقم المتجر</th>
            <th>اسم المستخدم</th>
            <th >كلمة المرور </th>
            <th >اسم المتجر</th>
            <th>حالة المتجر</th>

            <th >عنوان المتجر</th>
            <th >انستجرام المتجر</th>
            <th >رقم هاتف المتجر</th>
            <th >رقم واتس المتجر</th>
            <th >رابط فيسبوك المتجر</th>






            <th >مسار الصورة</th>
            <th >صورة المتجر</th>

            <th>الذي اضاف هذا المتجر</th>
            <th>   تأريخ إضافة المتجر</th>
            <th>العلامة التجارية</th>
            <th>إظهار كافة المتاجر</th>
            <th>تعديل</th>


            <th>حذف</th>
            <th>إلغاء التفعيل</th>
            <th>إظهار</th>
        </tr>

        <?php


        $sql = "select * from users";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {




                echo "<tr>
                        <td hidden='hidden'>$row[0]</td>

                         <td>$row[1]</td>

                            <td>$row[2]</td>
 <td >$row[6]</td>
                            <td>$row[3]</td>
                             <td>$row[4]</td>
                                 <td>$row[5]</td>

 <td>$row[9]</td>
  <td>$row[10]</td>
   <td>$row[11]</td>


          ";











                echo"

                                       <td>$row[7]</td>
                                           <td><img  width='193' height='130' src='".$row[7]."'></td>

                                        ";
                $s=" select admin.name  from users
INNER JOIN admin on admin.id=$row[8]";

                $r = mysqli_query($con, $s);

                $rowaa = mysqli_fetch_assoc($r);
//
                $name_admin=$rowaa['name'];













                echo"
<td>".   $name_admin."</td>
 <td>$row[12]</td>
     <td>$row[13]</td>
     <td>$row[14]</td>
                      <td>
                        <a  class='1' href='#' onclick='edit()'>تعديل</a>


                         </td>

                         <td>
                          <a class='2' style='color: #f00' href='#' onclick='del()'>حذف</a>
                         </td>";
                if($row[3]=='0'){

                    echo"  <td>

                          <a class='3' style='' href='#' onclick='block()'>إلغاء التفعيل</a>
                         </td>";}
                else{

                    echo"  <td>

                          <a class='3' style='' href='#' onclick='block()'>تفعيل </a>
                         </td>";}
                if($row[14]=='0'){

                    echo"  <td>

                          <a class='4' style='' href='#' onclick='go()'>إظهار كافة المتاجر </a>
                         </td>";}
                else{

                    echo"  <td>

                          <a class='4' style='' href='#' onclick='go()'> إخفاء كافة المتاجر </a>
                         </td>";}




                echo"  </tr>";
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
            var name_shop = currentRow.find("td:eq(3)").text();



            var address = currentRow.find("td:eq(5)").text();
            var des = currentRow.find("td:eq(6)").text();

            var phone = currentRow.find("td:eq(7)").text();

            var whats = currentRow.find("td:eq(8)").text();

            var url_f = currentRow.find("td:eq(9)").text();


            var tag = currentRow.find("td:eq(14)").text();

            var old_img = currentRow.find("td:eq(10)").text();


            localStorage.setItem('id', id);
            localStorage.setItem('name',name);
            localStorage.setItem('pass',pass);

            localStorage.setItem('name_shop',name_shop);
            localStorage.setItem('des',des);
            localStorage.setItem('address',address);

            localStorage.setItem('phone',phone);
            localStorage.setItem('whats',whats);
            localStorage.setItem('url_f',url_f);

            localStorage.setItem('tag',tag);

            localStorage.setItem('old_img',old_img);



            window.open("edit_stack.php", "_self");
        });
    }



    function del() {

        $(document).unbind().on("click",".2",function(){

            var currentRow=$(this).closest("tr");


            var id=currentRow.find("td:eq(0)").text();

            var old_img=currentRow.find("td:eq(10)").text();


            var sure=confirm("هل تريد حذف المتجر");
            if(sure===true){

            $.ajax({
                type: "POST",
                data: {id:id,old_img:old_img},
                url: "delete_stack.php",
                success: function(data){
                    alert(data);
                    window.open("show_stack.php", "_self");

                }
            });

            }else{
                return;
            }
        });
    }





    function go() {

        $(document).unbind().on("click", ".4", function () {
            var currentRow = $(this).closest("tr");
            var _id = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var _block = currentRow.find("td:eq(15)").text();

            if (_block == 0) {
                _block = 1;
                currentRow.find("td:eq(19)").html("<a href='#'  class='4' onclick='go()'>إخفاء كافة المتاجر </a>");
            } else {
                _block = 0;
                currentRow.find("td:eq(19)").html("<a href='#'  class='4' onclick='go()'>إظهار كافة المتاجر </a>");
            }

            currentRow.find("td:eq(15)").html(_block);


            $.ajax({
                type: "POST",
                data: {id: _id, block: _block},
                url: "block_view.php",
                success: function (data) {

                    //alert(data)
                }
            });
            location.reload();
        });

    }


    function block() {

        $(document).unbind().on("click", ".3", function () {
            var currentRow = $(this).closest("tr");
            var _id = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var _block = currentRow.find("td:eq(4)").text();

            if (_block == 0) {
                _block = 1;
                currentRow.find("td:eq(18)").html("<a href='#'  class='3' onclick='block()'>تفعيل </a>");
            } else {
                _block = 0;
                currentRow.find("td:eq(18)").html("<a href='#'  class='3' onclick='block()'>إلغاء التفعيل</a>");
            }

            currentRow.find("td:eq(4)").html(_block);


            $.ajax({
                type: "POST",
                data: {id: _id, block: _block},
                url: "block_stack.php",
                success: function (data) {

                    //alert(data)
                }
            });
            location.reload();
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