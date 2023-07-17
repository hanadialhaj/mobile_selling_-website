<?php

session_start();

if(!isset($_SESSION["Username"])) {
    header("location: login.php");
}
include '../init.php';
if($_SESSION['grope']=="1"){
    include('sidebar_admin.php');
}
else{
    include('sidebar.php');
}

?>
        <div class="container">


            <h1 style="color: #005cbf">اضافة  المتجر</h1>
            
           <div class="row1">
                <div class="form-horizontal">


                    <div class="form-group">
                        <label for="username" class="col-form-label">اسم المستخدم:</label>
                        <input class="form-control" type="text" id="name">
                    </div>



                    <div class="form-group">
                        <label class="col-form-label" for="password" >كلمة المرور:</label>
                        <input  class="form-control" type="password" id="password">
                    </div>


                    <div class="form-group">
                        <label for="name_shop" class="col-form-label">اسم المتجر:</label>
                        <input class="form-control" type="text" id="name_shop">
                    </div>



                    <div class="form-group">
                        <label for="address" class="col-form-label">عنوان المتجر:</label>
                        <input class="form-control" type="text" id="address">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label">رقم هاتف المتجر:</label>
                        <input class="form-control" type="text" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="whats" class="col-form-label">رقم واتس المتجر:</label>
                        <input class="form-control" type="text" id="whats">
                    </div>
                    <div class="form-group">
                        <label for="url_f" class="col-form-label">رابط فيسبوك المتجر:</label>
                        <input class="form-control" type="text" id="url_f">
                    </div>

                    <div class="form-group">
                        <label for="des" class="col-form-label">انستجرام المتجر:</label>
                        <input class="form-control" type="text" id="des">
                    </div>



                    <div class="form-group">
                        <label for="tag" class="col-form-label">علامة تجارية:</label>
                        <input class="form-control" type="text" id="tag">
                    </div>





                    <div class="form-group">
                        <label class="col-form-label" for="pic">اختر صورة</label>
                        <input class="form-control" id="pic" type="file"/>
                    </div>



                    <div class="form-group">
                        <button class="btn btn-primary" id="save" type="button">حفظ</button>
                    </div>

                </div>
           </div>

        </div>

<script
    src="../js/jquery.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>

<script type="text/JavaScript">

    $(document).ready(function(){

        $('#save').on('click', function() {

            var name = $("#name").val();
            var name_shop = $("#name_shop").val();
            var des = $("#des").val();
            var password = $("#password").val();
            var address = $("#address").val();
            var tag = $("#tag").val();

            var phone= $("#phone").val();



            var whats= $("#whats").val();

            var url_f= $("#url_f").val();


            var file_size = document.getElementById('pic');
            var file_data = $('#pic').prop('files')[0];

            var form_data = new FormData();

            form_data.append('name',name);
            form_data.append('name_shop',name_shop);
            form_data.append("address", address);
            form_data.append('password', password);
            form_data.append('des',des);
            form_data.append('file', file_data);


            form_data.append('phone',phone);
            form_data.append('whats',whats);
            form_data.append('url_f',url_f);



            form_data.append('tag',tag);

            if (name !== ""  & name_shop !== "" & address !== "" & password !== "" & des !== "" & whats!==""  & phone!=="" & url_f!==""  & tag!==""  &file_size.files.length !== 0 ) {
                $.ajax({
                    url: 'insert_stack.php',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function (data) {
                        if(data === "1"){
                            alert("تمت بنجاح");
                            window.open("show_stack.php", "_self")
                        }else {

                            // alert("خطا في الاضافة");
                            alert(data);

                        }
                    }
                });
            }
            else {
                alert("يجب ادخال جميع الحقول");
            }
        });
    });



</script>
<style>
    h1{
        margin-left:200px;
    }
    .container{
        margin-right: 500px;
        margin-top: 100px;

    }
    label{
        margin-left:400px;
    }
    .btn-primary{
        justify-content: center;
        align-items: center;
        /* padding: 0 20px;*/
        min-width: 120px;
        height: 40px;
        background-color: #bd59d4;

        border-radius: 25px;
        text-align: center;
        /* margin-top: -46px;*/
        font-family: SourceSansPro-SemiBold;
        font-size: 14px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;

        box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
        -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
        -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
        -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
        -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
    }
    .form-control{
        width: 450px;
    }
</style>
    </body>
</html> 