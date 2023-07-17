<meta charset="utf-8">

        

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
<?php
include 'db.php';

$sql3 = "select * from users where id='5'      ";
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

                    </ul>';}}?>









						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>