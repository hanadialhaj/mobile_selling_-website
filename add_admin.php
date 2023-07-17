<?php

session_start();
if(!isset($_SESSION["Username"])) {
    header("location: login.php");
}
if($_SESSION['grope']=="1"){
    include('sidebar_admin.php');
}
else{
    include('sidebar.php');
}

?>

        <div class="container">


            <h1 style="color: #005cbf">اضافة  مدير</h1>
            
           <div class="row1">
                <div class="form-horizontal">


                    <div class="form-group">
                        <label for="username" class="col-form-label">اسم المستخدم</label>
                        <input class="form-control" type="text" id="name">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="password" >كلمة المرور </label>
                        <input  class="form-control" type="password" id="pass">
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
                    var pass= $("#pass").val();

                    var form_data = new FormData();


                    form_data.append('name',name);
                    form_data.append('pass',pass);


                    if (name!==""&pass!=="" )

                    {


                        $.ajax({
                            url			: 'insert_admin.php', 	// point to server-side PHP script
                            dataType	: 'text',  			// what to expect back from the PHP script, if anything
                            cache		: false,
                            contentType	: false,
                            processData	: false,
                            data		: form_data,
                            type		: 'post',
                            success		: function(handy){
                                alert(handy);
                                if(handy==="تمت بنجاح"){
                                    window.open("show_admin.php", "_self")

                                }
                            }
                        });




                    }

                    else{


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