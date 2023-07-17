<?php

/**
 * Created by PhpStorm.
 * User: Hanadi
 * Date: 10/7/21
 * Time: 10:45 AM
 */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Online Shopping</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #navigation {
            /* background: #FF4E50;  *//* fallback for old browsers *//*
             background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  *//* Chrome 10-25, Safari 5.1-6 *//*
             background: linear-gradient(to right, #F9D423, #FF4E50); *//* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *//*
 */

            background:#ffffff;
        }
        #header {

            background: #f0fff4;  /* fallback for old browsers */
            background: linear-gradient(to right, #ffffff, #acdaff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #dddddd, #9adae8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #top-header {


            background: #ebebeb;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #dddddd, #75737b);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #d8d8d8, #ebebeb); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        .footer-links li a {
            color: #1E1F29;
        }
        .mainn-raised {

            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .glyphicon{
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .glyphicon-chevron-left:before{
            content:"\f053"
        }
        .glyphicon-chevron-right:before{
            content:"\f054"
        }




    </style>

</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">



        </div>
    </div>
    <!-- /TOP HEADER -->



    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <img src="img/barka1.ico" style="height: 80px;margin-left: 30px" >
                        <a href="#" class="logo">
                            <font style="font-style:normal; font-size: 33px;color: #000;font-family: serif">
                                البركة تيليكوم
                            </font>

                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action="search.php" method="post">
                            <select class="input-select" name="select" id="select">
                                <option value="0">كل الأصناف</option>
                                <option value="2">جوالات </option>
                        <option value="1">ذواكر وفلاشات</option>

                            </select>
                            <input class="input" id="search" type="text" placeholder="ابحث هنا" name="search">
                            <button type="submit"  name="submit" class="search-btn">ابحث</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">


                        <!-- Cart -->

                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#" style="color:#000000;">
                                <i class="fa fa-bars"></i>
                                <span>القائمة</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
<nav id='navigation'>
    <!-- container -->
    <div class="container" id="get_category_home">
        <div id='responsive-nav'>
            <!-- NAV -->
            <ul class='main-nav nav navbar-nav'>
                <li class='active'><a href='index.php'>الرئيسية</a></li>
             <li><a href='store_company.php'>ذواكر وفلاشات</a></li>
                <li><a href='store.php'>الجوالات</a></li>
            </ul>
            <!-- /NAV -->
        </div>

    </div>
    <!-- responsive-nav -->

    <!-- /container -->
</nav>


<!-- NAVIGATION -->

<div class="modal fade" id="Modal_login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">

                <div class="wait overlay">
                    <div class="loader"></div>
                </div>
                <div class="container-fluid">
                    <!-- row -->


                    <div class="login-marg">
                        <!-- Billing Details -->


                        <!-- /Billing Details -->







                    </div>

                    </form>

                    <!-- Shiping Details -->

                    <!-- /Shiping Details -->

                    <!-- Order notes -->

                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->

                <!-- /Order Details -->

                <!-- /row -->
            </div>
        </div>

    </div>

</div>
</div>
<div class="modal fade" id="Modal_register" role="dialog">
    <div class="modal-dialog" style="">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="wait overlay">
                    <div class="loader"></div>
                </div>
                <style>
                    .input-borders{
                        border-radius:30px;
                    }
                </style>
                <!-- row -->

                <div class="container-fluid">



                    <!-- /Billing Details -->


                    <!-- Billing Details -->
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" id="signup_msg">


                        </div>
                        <!--Alert from signup form-->
                    </div>
                    <div class="col-md-2"></div>
                </div>


            </div>
        </div>



        <!-- /row -->



    </div>

</div>

</div>
</div>

<div class="main main-raised">
    <div class="container mainn-raised" style="width:100%;">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->


            <!-- Wrapper for slides -->
           <!-- <div class="carousel-inner">

                <div class="item active">
                    <img src="img/banner3.jpg" alt="Los Angeles" style="width:100%;">

                </div>

                <div class="item">
                    <img src="img/banner2.jpg" style="width:100%;">

                </div>

                <div class="item">
                    <img src="img/banner4.jpg" alt="New York" style="width:100%;">

                </div>
                <div class="item">
                    <img src="img/banner1.jpg" alt="New York" style="width:100%;">

                </div>
                <div class="item">
                    <img src="img/banner3.jpg" alt="New York" style="width:100%;">

                </div>-->

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only" >Previous</span>
            </a>
            <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <!-- SECTION -->
    <div class="section mainn mainn-raised">


        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <a href="store_company.php"><div class="shop">
                            <div class="shop-img">
                                <img src="img/san.jpg" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>مجموعة<br>الذواكر والفلاشات</h3>
                                <!--   <a href="product.php?p=78" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>-->
                            </div>
                        </div></a>
                </div>
                <!-- /shop --
                <!-- shop -->
               <!-- <div class="col-md-4 col-xs-6">
                    <a href="store_company.php"><div class="shop">
                            <div class="shop-img">
                                <img src="img/shop01.png" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>مجموعة<br>اللابتوبات</h3>

                            </div>
                        </div></a>
                </div>-->
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <a href="store.php"><div class="shop">
                            <div class="shop-img">
                                <img src="img/sh2.jpg" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>مجموعة<br>الهواتف </h3>
                                <!-- <a href="product.php?p=72" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
     -->                        </div>
                        </div></a>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <!--<div class="col-md-4 col-xs-6">
                    <a href="store.php"><div class="shop">
                            <div class="shop-img">
                                <img src="img/sh1.jpg" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>كل<br>جديد</h3>

                            </div>
                        </div></a>-->
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->



<!-- SECTION -->
<div class="section">
<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">

























        <!-- section title -->
        <div class="col-md-12">
            <div class="section-title">
                <h3 class="title">جوالات حديثة</h3>
                <div class="section-nav">
                    <ul class="section-tab-nav tab-nav">


                    </ul>
                </div>
            </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12 mainn mainn-raised">
            <div class="row">
                <div class="products-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="products-slick" data-nav="#slick-nav-1" >

                            <?php

                            include '../init.php';
                            $sql = "select * from pro   where block='0' and id_user=5    ";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {

                                   // $im=explode(',',$row[6]);
                                    $sql2 = "select * from company_phon where id=$row[29] and  block='0'      ";
                                    $result2 = mysqli_query($con, $sql2);

                                    if(mysqli_num_rows($result2) > 0) {
                                        while ($row2 = mysqli_fetch_array($result2)) {



















                                            echo "



<div class='product'>
    <a href='detaills_phone.php?p=$row[0]'><div class='product-img'>
            <img src='../images/$row[6]' style='max-height: 300px' alt=''>
            <div class='product-label'>
           
                <span class='new'>تفاصيل اكثر</span>
            </div>
        </div></a>
    <div class='product-body'>
 
        <h3 class='product-name header-cart-item-name'><a href=''>$row[1]</a></h3>
         <h3 class='product-name header-cart-item-name'><a href=''>$row[2]</a></h3>
               <h3 class='product-name header-cart-item-name'>  <p class='product-category'>$row2[1]</p></h3>
        <h4 class='product-price header-cart-item-info'>$$row[27]<del class='product-old-price'>$$row[26]</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
           <!-- <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>-->
        </div>
    </div>
    <div class='add-to-cart'>";
                                            $sql3 = "select * from users where id='5'      ";
                                            $result3 = mysqli_query($con, $sql3);

                                            if(mysqli_num_rows($result3) > 0) {
                                                while ($row3 = mysqli_fetch_array($result3)) {

                                                    echo "<button class='add-to-cart-btn block2-btn-towishlist' > <a   href='https://api.WhatsApp.com/send?phone=+967.$row3[10]&text=hi'><i class='fa fa-wechat'></i>              للشراء تواصل معنا</a></button>
    </div>
</div>

";}}}}}}?>



                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section mainn mainn-raised">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">









                    <div class="col-md-12">
                <div class="hot-deal">
                    <!-- <ul class="hot-deal-countdown">
                         <li>
                             <div>
                                 <h3>02</h3>
                                 <span>Days</span>
                             </div>
                         </li>
                         <li>
                             <div>
                                 <h3>10</h3>
                                 <span>Hours</span>
                             </div>
                         </li>
                         <li>
                             <div>
                                 <h3>34</h3>
                                 <span>Mins</span>
                             </div>
                         </li>
                         <li>
                             <div>
                                 <h3>60</h3>
                                 <span>Secs</span>
                             </div>
                         </li>
                     </ul>-->
                    <h2 class="text-uppercase">ابقى مع المضمون</h2>
                    <p>واشتري منتجك من عندنا</p>
                    <?php

                    $sql3 = "select * from users where id='5'      ";
                    $result3 = mysqli_query($con, $sql3);

                    if(mysqli_num_rows($result3) > 0) {
                        while ($row3 = mysqli_fetch_array($result3)) {

                            echo"


                    <a class='primary-btn cta-btn' href=https://api.WhatsApp.com/send?phone=+967.$row3[10]&text=hi'>تواصل معنا <i class='fa fa-wechat'></i></a>";}}?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->


<!-- SECTION -->
<div class="section">
<!-- container -->
<div class="container">
<!-- row -->
<div class="row">


<div class="col-md-12">
    <div class="section-title">
        <h3 class="title">ذواكر وفلاشات حديثة</h3>
        <div class="section-nav">

            <!-- <h3 class="title">Top selling</h3>
             <div class="section-nav">
                 <ul class="section-tab-nav tab-nav">
                     <li class="active"><a data-toggle="tab" href="#tab2">Formals</a></li>
                     <li><a data-toggle="tab" href="#tab2">Shirts</a></li>
                     <li><a data-toggle="tab" href="#tab2">T-Shirts</a></li>
                     <li><a data-toggle="tab" href="#tab2">Pants</a></li>
                 </ul>-->
        </div>
    </div>
</div>

<div class="col-md-12 mainn mainn-raised">
<div class="row">
<div class="products-tabs">

<div id="tab2" class="tab-pane fade in active">
<div class="products-slick" data-nav="#slick-nav-2">




<?php

include '../init.php';
$sql = "select * from computer  where block='0'      ";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $im=explode(',',$row[14]);
        $sql2 = "select * from company where id=$row[16]  and  block='0'     ";
        $result2 = mysqli_query($con, $sql2);

        if(mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_array($result2)) {


                echo "



<div class='product'>
    <a href='detaills_computer.php?p=$row[0]'><div class='product-img'>
            <img src='../images/$im[0]' style='max-height: 170px;' alt=''>
            <div class='product-label'>

                <span class='new'>تفاصيل اكثر</span>
            </div>
        </div></a>
    <div class='product-body'>

        <h3 class='product-name header-cart-item-name'><a href=''>$row[1]</a></h3>
         <h3 class='product-name header-cart-item-name'><a href=''>$row[2]</a></h3>
             <h3 class='product-name header-cart-item-name'>  <p class='product-category'>$row2[1]</p></h3>
        <h4 class='product-price header-cart-item-info'>$$row[7]<del class='product-old-price'>$$row[6]</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
          <!--  <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>-->
        </div>
    </div>
    <div class='add-to-cart'>";
                $sql3 = "select * from users where id='5'      ";
                $result3 = mysqli_query($con, $sql3);

                if(mysqli_num_rows($result3) > 0) {
                    while ($row3 = mysqli_fetch_array($result3)) {



                        echo"    <button class='add-to-cart-btn block2-btn-towishlist' > <a   href='https://api.WhatsApp.com/send?phone=+967.$row3[10]&text=hi'><i class='fa fa-wechat'></i>              للشراء تواصل معنا</a></button>
    </div>
</div>

";}}}}}}?>

<!-- section title -->

<!--
<div class="col-md-12">
    <div class="section-title">
        <h3 class="title">كمبيوترات حديثة</h3>
        <div class="section-nav">


        </div>
    </div>
</div>

<div class="col-md-12 mainn mainn-raised">
<div class="row">
<div class="products-tabs">

<div id="tab2" class="tab-pane fade in active">
<div class="products-slick" data-nav="#slick-nav-2">




--><?php
/*
include '../init.php';
$sql = "select * from computer  where block='0'      ";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $im=explode(',',$row[14]);
        $sql2 = "select * from company where id=$row[16]  and  block='0'     ";
        $result2 = mysqli_query($con, $sql2);

        if(mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_array($result2)) {


                echo "



<div class='product'>
    <a href='detaills_computer.php?p=$row[0]'><div class='product-img'>
            <img src='../images/$im[1]' style='max-height: 170px;' alt=''>
            <div class='product-label'>
            
                <span class='new'>تفاصيل اكثر</span>
            </div>
        </div></a>
    <div class='product-body'>
   
        <h3 class='product-name header-cart-item-name'><a href=''>$row[1]</a></h3>
         <h3 class='product-name header-cart-item-name'><a href=''>$row[2]</a></h3>
             <h3 class='product-name header-cart-item-name'>  <p class='product-category'>$row2[1]</p></h3>
        <h4 class='product-price header-cart-item-info'>$$row[7]<del class='product-old-price'>$$row[6]</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
          <!--  <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>-->
        </div>
    </div>
    <div class='add-to-cart'>";
                $sql3 = "select * from users where id='2'      ";
                $result3 = mysqli_query($con, $sql3);

                if(mysqli_num_rows($result3) > 0) {
                    while ($row3 = mysqli_fetch_array($result3)) {



                        echo"    <button class='add-to-cart-btn block2-btn-towishlist' > <a   href='https://api.WhatsApp.com/send?phone=+967.$row3[10]&text=hi'><i class='fa fa-wechat'></i>              للشراء تواصل معنا</a></button>
    </div>
</div>

";}}}}}}*/?>





<!--
<div class='product'>
    <a href='product.php?p=60'><div class='product-img'>
            <img src='product_images/pm11.JPG' style='max-height: 170px;' alt=''>
            <div class='product-label'>
                <span class='sale'>-30%</span>
                <span class='new'>NEW</span>
            </div>
        </div></a>
    <div class='product-body'>
        <p class='product-category'>Mens Wear</p>
        <h3 class='product-name header-cart-item-name'><a href='product.php?p=60'>boys shirts</a></h3>
        <h4 class='product-price header-cart-item-info'>150<del class='product-old-price'>$990.00</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
        </div>
    </div>
    <div class='add-to-cart'>
        <button pid='60' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
    </div>
</div>







<div class='product'>
    <a href='product.php?p=61'><div class='product-img'>
            <img src='product_images/pm12.JPG' style='max-height: 170px;' alt=''>
            <div class='product-label'>
                <span class='sale'>-30%</span>
                <span class='new'>NEW</span>
            </div>
        </div></a>
    <div class='product-body'>
        <p class='product-category'>Mens Wear</p>
        <h3 class='product-name header-cart-item-name'><a href='product.php?p=61'>boys shirts</a></h3>
        <h4 class='product-price header-cart-item-info'>215<del class='product-old-price'>$990.00</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
        </div>
    </div>
    <div class='add-to-cart'>
        <button pid='61' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
    </div>
</div>







<div class='product'>
    <a href='product.php?p=62'><div class='product-img'>
            <img src='product_images/pm13.JPG' style='max-height: 170px;' alt=''>
            <div class='product-label'>
                <span class='sale'>-30%</span>
                <span class='new'>NEW</span>
            </div>
        </div></a>
    <div class='product-body'>
        <p class='product-category'>Mens Wear</p>
        <h3 class='product-name header-cart-item-name'><a href='product.php?p=62'>boys shirts</a></h3>
        <h4 class='product-price header-cart-item-info'>299<del class='product-old-price'>$990.00</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
        </div>
    </div>
    <div class='add-to-cart'>
        <button pid='62' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
    </div>
</div>







<div class='product'>
    <a href='product.php?p=63'><div class='product-img'>
            <img src='product_images/pt1.JPG' style='max-height: 170px;' alt=''>
            <div class='product-label'>
                <span class='sale'>-30%</span>
                <span class='new'>NEW</span>
            </div>
        </div></a>
    <div class='product-body'>
        <p class='product-category'>Mens Wear</p>
        <h3 class='product-name header-cart-item-name'><a href='product.php?p=63'>boys Jeans Pant</a></h3>
        <h4 class='product-price header-cart-item-info'>550<del class='product-old-price'>$990.00</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
        </div>
    </div>
    <div class='add-to-cart'>
        <button pid='63' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
    </div>
</div>







<div class='product'>
    <a href='product.php?p=64'><div class='product-img'>
            <img src='product_images/pt2.JPG' style='max-height: 170px;' alt=''>
            <div class='product-label'>
                <span class='sale'>-30%</span>
                <span class='new'>NEW</span>
            </div>
        </div></a>
    <div class='product-body'>
        <p class='product-category'>Mens Wear</p>
        <h3 class='product-name header-cart-item-name'><a href='product.php?p=64'>boys Jeans Pant</a></h3>
        <h4 class='product-price header-cart-item-info'>460<del class='product-old-price'>$990.00</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
        </div>
    </div>
    <div class='add-to-cart'>
        <button pid='64' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
    </div>
</div>







<div class='product'>
    <a href='product.php?p=65'><div class='product-img'>
            <img src='product_images/pt3.JPG' style='max-height: 170px;' alt=''>
            <div class='product-label'>
                <span class='sale'>-30%</span>
                <span class='new'>NEW</span>
            </div>
        </div></a>
    <div class='product-body'>
        <p class='product-category'>Mens Wear</p>
        <h3 class='product-name header-cart-item-name'><a href='product.php?p=65'>boys Jeans Pant</a></h3>
        <h4 class='product-price header-cart-item-info'>470<del class='product-old-price'>$990.00</del></h4>
        <div class='product-rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <div class='product-btns'>
            <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
            <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
            <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
        </div>
    </div>
    <div class='add-to-cart'>
        <button pid='65' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
    </div>-->
</div>




<!-- /product -->
</div>
<div id="slick-nav-2" class="products-slick-nav"></div>
</div>
<!-- /tab -->
</div>
</div>
</div>
<!-- /Products tab & slick -->
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
<!-- container -->
<div class="container">
<!-- row -->
<div class="row">


<div class="col-md-4 col-xs-6">
<div class="section-title">
    <!--   <h4 class="title">Top selling</h4>-->
    <div class="section-nav">
        <div id="slick-nav-3" class="products-slick-nav"></div>
    </div>
</div>


<div class="products-widget-slick" data-nav="#slick-nav-3">
<div id="get_product_home">
    <!-- product widget -->

    <!-- product widget -->
</div>

<div id="get_product_home2">

<!--  <div class="product-widget">
      <div class="product-img">
          <img src="img/product01.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product02.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product03.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

</div>
</div>
</div>

<div class="col-md-4 col-xs-6">
<div class="section-title">
<h4 class="title">Top selling</h4>
<div class="section-nav">
  <div id="slick-nav-4" class="products-slick-nav"></div>
</div>
</div>

<div class="products-widget-slick" data-nav="#slick-nav-4">
<div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product04.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product05.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product06.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

</div>

<div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product07.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product08.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product09.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

</div>
</div>
</div>

<div class="clearfix visible-sm visible-xs">

</div>

<div class="col-md-4 col-xs-6">
<div class="section-title">
<h4 class="title">Top selling</h4>
<div class="section-nav">
  <div id="slick-nav-5" class="products-slick-nav"></div>
</div>
</div>

<div class="products-widget-slick" data-nav="#slick-nav-5">
<div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product01.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product02.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product03.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

</div>

<div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product04.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product05.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>
  </div>

  <div class="product-widget">
      <div class="product-img">
          <img src="img/product06.png" alt="">
      </div>
      <div class="product-body">
          <p class="product-category">Category</p>
          <h3 class="product-name"><a href="#">product name goes here</a></h3>
          <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
      </div>-->
</div>

</div>
</div>
</div>

</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->
</div>
</div>



<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">

                <div class="newsletter">
                    <p>تواصل معنا <strong>عبر مواقع التواصل الإجتماعي</strong></p>
                    <!--         <form id="offer_form" onsubmit="return false">
                                 <input class="input" type="email" id="email" name="email" placeholder="Enter Your Email">

                                 <button class="newsletter-btn" value="Sign Up" name="signup_button" type="submit"><i class="fa fa-envelope"></i> Subscribe</button>

                             </form>-->
                    <?php  $sql3 = "select * from users where id='5'      ";
                    $result3 = mysqli_query($con, $sql3);

                    if(mysqli_num_rows($result3) > 0) {
                        while ($row3 = mysqli_fetch_array($result3)) {

                            echo'    <div class="" id="offer_msg">
                        <!--Alert from signup form-->
                    </div>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="'.$row3[11].'"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="tel:'.$row3[9].'"><i class="fa fa-phone"></i></a>
                        </li>
                        <li>
                            <a href="http://instagram.com/p/.'.$row3[5].'"><i class="fa fa-instagram"></i></a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div><footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">من نحن</h3>

                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>العنوان </a>'.$row3[4].'</li>
                            <li><a href="tel:'.$row3[9].'"><i class="fa fa-phone">'.$row3[9].'</i></a></li>

                        </ul>';  }} ?>
                </div>
            </div>
            <div class="col-md-6 text-center" style="margin-top:80px;">
                <!-- <ul class="footer-payments">
                     <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                     <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                     <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                     <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                     <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                     <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                 </ul>-->
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

							</span>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="footer">
                    <!-- <h3 class="footer-title">Categories</h3>
                     <ul class="footer-links">
                         <li><a href="#">Mobiles</a></li>
                         <li><a href="#">Men</a></li>
                         <li><a href="#">Women</a></li>
                         <li><a href="#">Kids</a></li>
                         <li><a href="#">Accessories</a></li>
                     </ul>-->
                </div>
            </div>

            <div class="clearfix visible-xs"></div>


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /top footer -->


<!-- bottom footer -->

<!-- /bottom footer -->
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
<script src="js/sweetalert.min"></script>
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>var c = 0;
    function menu(){
        if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";
            c++;
        }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";
            c++;
        }
    }


</script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

</body>
</html>

