<?php
error_reporting(0);
include("connection/connect.php");
$book = $_GET['book'];


if(isset($_POST['submit']))                  //if post btn is pressed
{   
$fname = $_POST['fname'];   
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$brand = $_POST['brand'];
$cardno = $_POST['cardno'];
$month = $_POST['exp_month'];
$year = $_POST['exp_year'];



                     

	if($fname==' '||$lname==' '||$address==' '||$city==' '||$email==' '||$phone==' '||$brand==' '||$cardno==' '||$month==' '||$year=='' )
	{
	
	           $on= '<div class="alert alert-dismissable fade in" style="background:#ea8f8f;border:1px solid #ce7575;color:#fff;">';
                    $tw=	'<a href="#"  data-dismiss="alert" ></a>';				
				    $th= ' All Text Field must be required!';
					$fu=  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO detail(fname,lname,address,city,email,phone,brand,cardno,emonth,eyear) VALUES('$fname', '$lname','$address','$city','$email','$phone','$brand','$cardno','$month','$year')";
	mysqli_query($db, $sql);
	
  $fi= '<div class="alert alert-success alert-dismissable fade in">';
 $si=	'<a href="#" data-dismiss="alert" ></a>';
 $se= 'Thankyou for Your Booking. Details are send to your Registered E-mail Address.';
$ei=  	'</div>';
	}
	
	
}












$sql="select * from booking where r_id='$book'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);

						$r_id =  $row['r_id'];
						$rimage =  $row['rimage'];
						$rtype =  $row['rtype'];
				        $rprice =  $row['rprice'];
						$newprice= $rprice + 300;
						$rtext =  $row['rtext'];

					
?>


<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Relax Hostel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Linking Bootstrap css file -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Linking Main Css file -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

	
	<link rel="stylesheet" type="text/css" href="css/popup.php">
</head>


<body>

	<div class="wrapper">


	<header class="abs">
			<div class="top-bar">
				<div class="container">
					<div class="con-links">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> (+91)9878920494</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> Rsrs4632815@gmail.com</li>
						</ul>
					</div><!--con-links end-->
					<div class="social-links">
						<ul class="social-lnks">
							<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
						
						</ul>
						
					</div><!--socail-links end-->
				</div>
			</div><!--top-bar end-->
			<div class="bottom-header">
				<div class="container">
					<div class="hd">
						<div class="logo">
							<a href="#" title="">
								<img src="images/logo.png" alt="" />
							</a>
						</div><!--logo end-->
						<div class="menu-search">
							<nav>
								<ul>
									<li class="active menu-item-has-children"><a href="index.php" title=""><i class="fa fa-joomla"></i>Home</a>
										
									</li>
									
									<li><a href="about.php" title="">About Us</a></li>
										<li><a href="term.php" title="">term & condition </a></li>
									<li><a href="contact.php" title="">Contact Us</a></li>
								</ul>
		 					</nav><!--nav end-->
							
						</div><!--menu-search end-->
						<div class="menu-icon">
							<span class="first-bar"></span>
							<span class="second-bar"></span>
							<span class="third-bar"></span>
						</div>
					</div>
				</div>
			</div><!--bottom-header end-->
		</header><!--Header end-->
		
		
		
		<div class="about-bg">
			<div class="container">
				<div class="rl-banner">
					<h2>Reservation Room</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Reservation form</span></li>
					</ul>
				</div>
			</div>
		</div>
	


		<section>
		
<?php		
echo$on;
echo$tw;
 echo$th;
echo$fu;
 echo $fi;
 echo$si;
echo $se;
echo$ei;

?>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="res-dates">
								
								
								
								
								
								<div class="select-rooms">
									<h3 class="res-title">Select Rooms</h3>
									<div class="rom-details">
										<h3>Room Type </h3>
										<h2><?php echo $rtype; ?></h2>
										
										<ul>
											<li>
												<span>Service</span>
												<b>Free</b>
											</li>
											
												<li>
												<span>price</span>
												<b><?php echo $rprice.'.00'; ?></b>
												
											</li>
											<li>
												<span>Tax</span>
												<b>300.00</b>
												
											</li>
										
										</ul>
										<h4 class="sc">Total  <span><?php echo $newprice; ?></span></h4>
									</div>
							
									<div class="total-bill">
										<h3>Grand Total</h3>
										<b><?php echo $newprice.'.00'; ?></b>
									</div><!--total-bill end-->
								</div>
							</div><!--res-dates end-->
						</div>
						<div class="col-md-8">
							<div class="billing-details">
								<h2>Billing details</h2>
								<div class="billing-form">
									<form   action="" method='post'>
										<div class="row">
											
											<div class="col-md-6">
												<label>
													<h3>First Name <span>*</span></h3>
													<input type="text" name="fname">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Last Name <span>*</span></h3>
													<input type="text" name="lname">
												</label>
											</div>
											
											<div class="col-md-12">
												<label class="sco">
													<h3>Address <span>*</span></h3>
													<input type="text" name="address">
													
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Town / City <span>*</span></h3>
													<input type="text" name="city" placeholder="Street Address">
												</label>
											</div>
											
											<div class="col-md-6">
												<label>
													<h3>Email address <span>*</span></h3>
													<input type="text" name="email" placeholder="Email">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Phone <span>*</span></h3>
													<input type="text" name="phone" placeholder="Phone Number">
												</label>
											</div>
										
											<div class="col-md-12">
												<label>
													<h3>Card Type</h3>
													<select    name='brand'	>
													<option selected="selected" disabled="disabled">Card Brand</option>
                                                  <option value='Master Card'>Master Card</option>
                                                  <option value='Visa'>Visa</option>
                                                  <option value='Discover'>Discover</option>
												   <option value='American Express'>American Express</option>
												      
                                   </select> 
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>ENTER YOUR 16 DIGIT CARD NUMBER:</h3>
													<input type="text" name="cardno" placeholder="xxxx-xxxxxx-xxxx-xx">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>MONTH  </h3>
												<select    name='exp_month'	 >
							<option selected="selected" disabled="disabled">Expiry Month:</option>
                                                  <option value='01 '>01</option>
												    <option value='02 '>02</option>
													  <option value='03 '>03</option>
													    <option value='05 '>05</option>
														    <option value='07 '>07</option>
															  <option value='08 '>08</option>
															    <option value='09 '>09</option>
																<option value='10 '>10</option>
																<option value='11 '>11</option>
																<option value='12 '>12</option>
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>YEAR OF EXPIRY:</h3>
													<select    name='exp_year'	>
									<option selected="selected" disabled="disabled">Expiry year:</option>
                                                  <option value='2018'>2018</option>
												    <option value='2017 '>2017</option>
													  <option value='2016 '>2016</option>
													    <option value='2015 '>2015</option>
														  <option value='2014 '>2014</option>
														    <option value='2013 '>2013</option>
															  <option value='2012 '>2012</option>
															    <option value='2011 '>2011</option>
																<option value='2010 '>2010</option>
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											
										</div>
											<div class="total-bill" >
										
												<input type="submit" name="submit"   class="total-bill" style='border-radius:5px;'/>
												
													</div>
									</form>
									
									
									
									
									
									
									<div class="cr-account">
										<div class="make-acnt">
										
										
										</div>
										<div class="make-acnt">
											<h3>Direct bank transfer</h3>
											<p>Make your payment directly into our bank account. Place use your order ID as thepayment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
										<div class="make-acnt">
											<h3>Cheque payment</h3>
										</div>
										<div class="make-acnt sco">
											<h3>Credit card</h3>
											<ul>
												<li><a href="#" title=""><img src="http://creativethemes.us/relax/images/resources/bill1.png"></a></li>
												<li><a href="#" title=""><img src="http://creativethemes.us/relax/images/resources/bill2.png"></a></li>
												<li><a href="#" title=""><img src="http://creativethemes.us/relax/images/resources/bill3.png"></a></li>
												<li><a href="#" title=""><img src="http://creativethemes.us/relax/images/resources/bill4.png"></a></li>
												<li><a href="#" title=""><img src="http://creativethemes.us/relax/images/resources/bill5.png"></a></li>
												<li><a href="#" title=""><img src="http://creativethemes.us/relax/images/resources/bill6.png"></a></li>
											</ul>
										</div>
									</div><!--cr-account end-->
								</div><!--billing-form end-->
							</div><!--billing-details end-->
						</div>
					</div>
				</div>
			</div>
		</section>


		
	
	

	<footer>
			<div class="block no-padding">
				<div class="bg bg3">
					<div class="container">
						<div class="top-footer">
							<div class="row">
								<div class="col-md-4">
									<div class="widget">
										<div class="about-widget">
											<a href="#" title=""><img src="images/logo2.png" alt=""></a>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  sed diam nonummy nibh euismod it tincidunt ut laoreet commodo consequat.  </p>
										
											<ul class="sc-links">
												<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
											
											</ul>
										</div><!--about-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="news-widget">
											<h3 class="widget-title">Latest Rooms</h3>
											<div class="news">
												<img src="images/resources/sroom1.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Single Room</a></h3>
													<span>$85 night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom2.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Luxury Room</a></h3>
													<span>$352 night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom3.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Double Room </a></h3>
													<span>$125 night</span>
												</div>
											</div><!--news end-->
										</div><!--news-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="widget-quick-links">
											<h3 class="widget-title">Quick Links</h3>
											<div class="qk-links">
												<ul>
													<li><a href="#" title="">Home</a></li>
													<li><a href="#" title="">About Us</a></li>
													<li><a href="#" title="">Suits</a></li>
													<li><a href="#" title="">News</a></li>
													<li><a href="#" title="">Contact Us</a></li>
													<li><a href="#" title="">Bookisnt</a></li>
													<li><a href="#" title="">Blogs</a></li>
												</ul>
												<ul>
													<li><a href="#" title="">Activities</a></li>
													<li><a href="#" title="">Gallery</a></li>
													<li><a href="#" title="">Aminities</a></li>
													<li><a href="#" title="">Single Room</a></li>
													<li><a href="#" title="">Testimonials</a></li>
													<li><a href="#" title="">Dinning</a></li>
													<li><a href="#" title="">Offers</a></li>
												</ul>
											</div>
										</div><!--widget-quick-links end-->
									</div><!--widget-end-->
								</div>
								<div class="col-md-2 lst">
									<div class="widget">
										<div class="widget-tags">
											<h3 class="widget-title">Tags</h3>
											<ul>
												<li><a href="#" title="">Booking</a></li>
												<li><a href="#" title="">TV</a></li>
												<li><a href="#" title="">Services</a></li>
												<li><a href="#" title="">Room</a></li>
												<li><a href="#" title="">Hostel</a></li>
												<li><a href="#" title="">WIFI</a></li>
												<li><a href="#" title="">AC</a></li>
												<li><a href="#" title="">Camera</a></li>
												<li><a href="#" title="">Party</a></li>
												<li><a href="#" title="">Pool</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">Offers</a></li>
												<li><a href="#" title="">Khignt</a></li>
											</ul>
										</div><!--widget-tags end-->
									</div><!--widget end-->
								</div>
							</div>
						</div><!--top-footer end-->
						<div class="bottom-footer">
							<div class="copyright">
								<p>© 2017 . All Rights Reserved. </p>
							</div><!--copyright end-->
							<div class="credit">
								<p>Create design by : <a href="#" title>Navbro</a></p>
							</div><!--credit end-->
						</div><!--bottom-footer end-->
					</div>
				</div>
			</div>
		</footer><!--footer end-->




	</div><!--wrapper end-->

<!-- Including Jquery Js File -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script>
<!-- Including Bootstrap js file -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script>
<!-- Custom Js file -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script>


</body>


<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 15:23:47 GMT -->
</html>