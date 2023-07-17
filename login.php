<?php
/**
 * Created by PhpStorm.
 * User: Hanadi
 * Date: 5/18/21
 * Time: 1:09 AM
 */
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>

    <!-- Font Icon -->
   <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">-->

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style_login.css">
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">تسجيل الدخول</h2>
                    <form method="POST" class="register-form" id="register-form" action="test_login.php">
                        <div class="form-group">
                            <label for="name"><i class="fa fa-user fa-fw"></i></label>
                            <input type="text" name="name" id="name" placeholder="الإسم"/>
                        </div>

                        <div class="form-group">
                            <label for="pass"><i class="fa fa-lock fa-fw"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="كلمة المرور"/>
                        </div>

                        <div class="form-group form-button">

                            <input type="submit" name="submit" id="submit" class="form-submit" value="تسجيل الدخول" />
                            <!--<label for="signup" style="text-align:center"><i class="fa fa-lock fa-fw"></i></label>-->
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="../images/signup-image.jpg" alt="sing up image"></figure>

                </div>
            </div>
        </div>
    </section>
    </div>
</body>
</html>