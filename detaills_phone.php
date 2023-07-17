<?php
include "header.php";
?>
<!-- /BREADCRUMB -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script>

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
</script>

<!-- SECTION -->
<meta charset="utf-8">
<nav id='navigation'>
    <!-- container -->
    <div class="container" id="get_category_home">
        <div id='responsive-nav'>
            <!-- NAV -->
            <ul class='main-nav nav navbar-nav'>
                <li class='active'><a href='index.php'>الرئيسية</a></li>
                <!--     <li><a href='store_company.php'>الكمبيوترات</a></li>-->
                <li><a href='store.php'>الجوالات</a></li>
            </ul>
            <!-- /NAV -->
        </div>

    </div>
    <!-- responsive-nav -->

    <!-- /container -->
</nav>
<div class="section main main-raised">
<!-- container -->
<div class="container">
<!-- row -->
<div class="row">
<!-- Product main img -->

<?php
include 'db.php';

$product_id = $_GET['p'];

$sql = " SELECT * FROM pro where block='0'and is_user=5  ";
$sql = " SELECT * FROM pro WHERE id = $product_id     and  block='0' and id_user=5 " ;
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    { //$im=explode(',',$row['image']);

$id_company=$row['id_company'];

$sql2 = "select * from company_phon where id='$id_company'  and  block='0'     ";
$result2 = mysqli_query($con, $sql2);

if(mysqli_num_rows($result2) > 0) {
    while ($row2 = mysqli_fetch_array($result2)) {
        echo '
									
                                    
                                
                                <div class="col-md-5 col-md-push-2">
                                <div id="product-main-img">
                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>
                                </div>
                            </div>
                                
                                <div class="col-md-2  col-md-pull-5">
                                <div id="product-imgs">
                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'g" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="../images/'.$row['image'].'" alt="">
                                    </div>
                                </div>
                            </div>

                                 
									';

        ?>
        <!-- FlexSlider -->

        <?php
        echo '
									
                                    
                                   
                    <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">'.$row['name'].'</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>

							</div>
							<div>
								<h3 class="product-price">$'.$row['price_after_discount'].'<del class="product-old-price">$'.$row['price'].'</del>       السعر</h3>

							</div>
								<ul class="product-links">
								<li><h4>الإسم :</h4></li>
								<li><h4><a  href="#">'.$row['name'].' </a></h4></li>

							</ul>

<ul class="product-links">
								<li><h4>النوع :</h4></li>
								<li><h4><a  href="#">'.$row['type'].' </a></h4></li>

							</ul>
							<ul class="product-links">



<ul class="product-links">
								<li><h4>الشركة المصنعة  :</h4></li>
								<li><h4><a  href="#">'.$row['made_in'].' </a></h4></li>

							</ul>


<ul class="product-links">
								<li><h4>نوع النظام :</h4></li>
								<li><h4><a  href="#">'.$row['type_system'].' </a></h4></li>

							</ul>



						<ul class="product-links">
								<li><h4>إصدار  الهاتف :</h4></li>
								<li><h4><a  href="#">'.$row['version'].' </a></h4></li>

							</ul>

								<ul class="product-links">
								<li><h4>نوع الشبكة :</h4></li>
								<li><h4><a  href="#">'.$row['type_network'].' </a></h4></li>

							</ul>





<ul class="product-links">
								<li><h4> عدد منافذ الشريحة :</h4></li>
								<li><h4><a  href="#">'.$row ['num_port'].' </a></h4></li>

							</ul>

							<ul class="product-links">
								<li><h4> حجم الشاشة :</h4></li>
								<li><h4><a  href="#">'.$row['size_screen'].' </a></h4></li>

							</ul>



	<ul class="product-links">
								<li><h4>شركة :</h4></li>
								<li><h4><a  href="#">'.$row2['name'].' </a></h4></li>

							</ul>






<ul class="product-links">
								<li><h4> دقة الكاميرا الخلفية :</h4></li>
								<li><h4><a  href="#">'.$row ['acurcy_back_camera'].' </a></h4></li>

							</ul>
							<ul class="product-links">
								<li><h4> دقة الكاميرا الأمامية :</h4></li>
								<li><h4><a  href="#">'.$row ['acurcy_front_camera'].' </a></h4></li>

							</ul>


							<ul class="product-links">
								<li><h4> زمن التجربة :</h4></li>
								<li><h4><a  href="#">'.$row['time_experiments'].' </a></h4></li>

							</ul>



	<ul class="product-links">
								<li><h4>حالة الهاتف :</h4></li>
								<li><h4><a  href="#">'.$row['state_phon'].' </a></h4></li>

							</ul>


<ul class="product-links">
								<li><h4>حجم الرام :</h4></li>
								<li><h4><a  href="#">'.$row['size_RAM'].' </a></h4></li>

							</ul>


<ul class="product-links">
								<li><h4>حجم الذاكرة الداخلية :</h4></li>
								<li><h4><a  href="#">'.$row['size_en_memory'].' </a></h4></li>

							</ul>



						<ul class="product-links">
								<li><h4>البطارية :</h4></li>
								<li><h4><a  href="#">'.$row['petary'].' </a></h4></li>

							</ul>

								<ul class="product-links">
								<li><h4>عدد الكاميرات :</h4></li>
								<li><h4><a  href="#">'.$row['num_camera'].' </a></h4></li>

							</ul>






							<ul class="product-links">
								<li><h4> الملحقات  :</h4></li>
								<li><h4><a  href="#">'.$row['add_on'].' </a></h4></li>

							</ul>



	<ul class="product-links">
								<li><h4>نوع العالج  :</h4></li>
								<li><h4><a  href="#">'.$row['type_process'].' </a></h4></li>

							</ul>













								<li><h4>هل يدعم البصمة :</h4></li>
								<li><h4><a  href="#">'.$row['finger_print'].' </a></h4></li>

							</ul>


<ul class="product-links">
								<li><h4>هل يدعم ذاكرة خارجية :</h4></li>
								<li><h4><a  href="#">'.$row['ex_memory'].' </a></h4></li>

							</ul>



<ul class="product-links">
								<li><h4>3G هل يدعم  :</h4></li>
								<li><h4><a  href="#">'.$row['support_3g'].' </a></h4></li>

							</ul>



















							<div class="add-to-cart">
								<div class="qty-label">

									<div class="input-number">

									</div>
								</div>
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
								<button class="add-to-cart-btn block2-btn-towishlist"><a   href="https://api.WhatsApp.com/send?phone=+967711598176&text=hi"><i class="fa fa-wechat"></i>  تواصل معنا للشراء </a></button>
                                </div>
								

							</div>
<a  href="index.php"><h3 style="color: #e26711;">العودة للرئيسية</h3></a>
							<ul class="product-btns">

							</ul>



							<ul class="product-links">
												</ul>

						</div>
					</div>
									
					
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					
					
					
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->

							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->


								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section main main-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    
					<div class="col-md-12">
						<div class="section-title text-center">

							
						</div>
					</div>
                    ';
       // $_SESSION['product_id'] = $row['product_id'];
    }
}}}
?>
<?php
include 'db.php';
//$product_id = $_GET['p'];
/*
$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN $product_id AND $product_id+3";
$run_query = mysqli_query($con,$product_query);
if(mysqli_num_rows($run_query) > 0){

    while($row = mysqli_fetch_array($run_query)){
        $pro_id    = $row['product_id'];
        $pro_cat   = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];

        $cat_name = $row["cat_title"];

        echo "
				
                        
                                <div class='col-md-3 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
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
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                                </div>
							
                        
			";
    }
    ;

}*/
?>
<!-- product -->

<!-- /product -->

</div>
<!-- /row -->

</div>
<!-- /container -->
</div>
<!-- /Section -->

<!-- NEWSLETTER -->

<!-- /NEWSLETTER -->

<!-- FOOTER -->
<?php
include "newslettter.php";
include "footer.php";

?>
