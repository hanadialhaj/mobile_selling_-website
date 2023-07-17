<?php
include 'header.php';
include 'db.php';
?>
    <!-- <script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>-->
<meta charset="utf-8">
    <div class="main main-raised">
        <nav id='navigation'>
            <!-- container -->
            <div class="container" id="get_category_home">
                <div id='responsive-nav'>
                    <!-- NAV -->
                    <ul class='main-nav nav navbar-nav'>
                        <li class='active'><a href='index.php'>الرئيسية</a></li>
                        <li><a href='store_company.php'>الذواكر</a></li>
                        <li><a href='store.php'>الجوالات</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>

            </div>
            <!-- responsive-nav -->

            <!-- /container -->
        </nav>

        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->


                <div class="row">
                    <!-- ASIDE -->
                    <div id="aside" class="col-md-3">
                        <!-- aside Widget -->
                        <div id="get_category">

                        </div>
				<!-- /responsive-nav -->













                        <!-- /aside Widget -->

                        <!-- aside Widget -->
                        <!--<div class="aside">
                            <h3 class="aside-title">Price</h3>
                            <div class="price-filter">
                                <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 0%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 0%; right: 0%;"></div><div class="noUi-origin" style="left: 100%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;"></div></div></div></div>
                                <div class="input-number price-min">
                                    <input id="price-min" type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                                <span>-</span>
                                <div class="input-number price-max">
                                    <input id="price-max" type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                        </div>-->
                        <!-- /aside Widget -->

                        <!-- aside Widget -->
                        <div id="get_brand">
                        </div>
                        <!-- /aside Widget -->

                        <!-- aside Widget -->
                        <div class="aside">
                          <!--  <h3 class="aside-title">Top selling</h3>-->
                            <div id="get_product_home">
                                <!-- product widget -->

                                <!-- product widget -->
                            </div>
                        </div>
                        <!-- /aside Widget -->
                    </div>
                    <!-- /ASIDE -->

                    <!-- STORE -->
                    <div id="store" class="col-md-9">
                        <!-- store top filter -->
                        <div class="store-filter clearfix">
                            <div class="store-sort">
                                <label>
                                    Sort By:
                                    <select class="input-select">
                                        <option value="0">Popular</option>
                                        <option value="1">Position</option>
                                    </select>
                                </label>

                                <label>
                                    Show:
                                    <select class="input-select">
                                        <option value="0">20</option>
                                        <option value="1">50</option>
                                    </select>
                                </label>
                            </div>
                            <ul class="store-grid">
                                <li class="active"><i class="fa fa-th"></i></li>
                                <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div>
                        <!-- /store top filter -->

                        <!-- store products -->
                        <div class="row" id="product-row">
                            <div class="col-md-12 col-xs-12" id="product_msg">
                            </div>
                            <!-- product -->
                            <div id="get_product">



                             <!--   <div class="col-md-12 mainn mainn-raised">
                                    <div class="row">
                                        <div class="products-tabs">

                                            <div id="tab1" class="tab-pane active">
                                                <div class="products-slick" data-nav="#slick-nav-1" >
-->
                                                    <?php
                                                    include 'db.php';


$product_id = $_GET['p'];



                                                    $sql2 = "select * from company where id=$product_id   and  block='0'      ";
                                                            $result2 = mysqli_query($con, $sql2);

                                                            if(mysqli_num_rows($result2) > 0) {
                                                                while ($row2 = mysqli_fetch_array($result2)) {
                                                    $sql = "select * from computer  where block='0' and id_company=$product_id     ";
                                                    $result = mysqli_query($con, $sql);

                                                    if(mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $im=explode(',',$row[14]);


                                                                   $d=$im[0];


echo "


                                <div class='col-md-3 col-xs-6'>
								<a href='detaills_computer.php?p=$row[0]'><div class='product'>
									<div class='product-img'>
										<img src='../images/$d' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>تفاصيل اكثر</span>
										</div>
									</div></a>
									<div class='product-body'>
										 <h3 class='product-name header-cart-item-name'><a href=''>$row[1]</a></h3>
         <h3 class='product-name header-cart-item-name'><a href=''>$row[2]</a></h3>
               <h3 class='product-name header-cart-item-name'>  <p class='product-category'>$row2[1]</p></h3>
										<h4 class='product-price header-cart-item-info'>$row[7]<del class='product-old-price'>$row[6]</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
					<!--						<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>-->
										</div>
									</div>
									<div class='add-to-cart'>
										 <button class='add-to-cart-btn block2-btn-towishlist' > <a   href='https://api.WhatsApp.com/send?phone=+967711598176&text=hi'><i class='fa fa-wechat'></i>              للشراء تواصل معنا</a></button>
									</div>
								</div>
                                </div>


 ";}}}}






/*
                                                                    echo "



                      <div class='product'>
                                <a href='product.php?p=70'><div class='product-img'>";


                                                                    $d=$im[1];

                                                                    echo "   <img src='../images/$d' style='max-height: 170px;' alt=''>";

                                                                    echo "      <div class='product-label'>
                                            <span class='sale'>-30%</span>
                                            <span class='new'>تفاصيل اكثر</span>
                                        </div>
                                    </div></a>
                                <div class='product-body'>
                                    <h3 class='product-name header-cart-item-name'>  <p class='product-category'>$row2[1]</p></h3>
                                    <h3 class='product-name header-cart-item-name'><a href='product.php?p=70'>$row[1]</a></h3>
                                    <h4 class='product-price header-cart-item-info'>$row[7]<del class='product-old-price'>$row[6]</del></h4>
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
                                    <button pid='70' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-wechat'></i> للشراء تواصل معنا</button>
                                </div>
                            </div>

                            ";}}}}*/?><!--
                                                </div>
                                                <div id="slick-nav-1" class="products-slick-nav"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>-->

















                                <!--Here we get product jquery Ajax Request-->
                            </div>

                            <!-- /product -->
                        </div>
                        <!-- /store products -->

                        <!-- store bottom filter -->
                        <div class="store-filter clearfix">
                          <!--  <span class="store-qty">Showing 20-100 products</span>-->
                            <ul class="store-pagination" id="pageno">
                                <li ><a class="active" href="#aside">1</a></li>

                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /store bottom filter -->
                    </div>
                    <!-- /STORE -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>
<!--

    </div>

    <div id="get_product_home2">

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
                </div>
            </div>

        </div>
    </div>
</div>

</div>

</div>

</div>

</div>
</div>



<div id="newsletter" class="section">

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="newsletter">
                    <p>Sign Up for the <strong>OFFERUPDATES</strong></p>
                    <form id="offer_form" onsubmit="return false">
                        <input class="input" type="email" id="email" name="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn" value="Sign Up" name="signup_button" type="submit"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <div class="" id="offer_msg">

                    </div>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>-->
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
                        <?php

                        $sql3 = "select * from users where id='5'      ";
                        $result3 = mysqli_query($con, $sql3);

                        if(mysqli_num_rows($result3) > 0) {
                            while ($row3 = mysqli_fetch_array($result3)) {

                                echo'

							 <h3 class="footer-title">من نحن</h3>

                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>العنوان </a>'.$row3[4].'</li>
                           <li><a href="tel:'.$row3[9].'"><i class="fa fa-phone">'.$row3[9].'</i></a></li>
								</ul>';}}?>
                    </div>
                </div>
                <div class="col-md-6 text-center" style="margin-top:80px;">
                 <!--   <ul class="footer-payments">
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
                      <!--  <h3 class="footer-title">Categories</h3>
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

