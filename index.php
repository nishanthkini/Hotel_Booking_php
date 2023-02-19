<?php
if(isset($_GET['search']))
{
	header("location:search.php");
}


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

		
		
		<section id="home" class="home-bg">
			<div class="block remove-btm-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-detial">
								<div class="home-banner">
									<div class="block">
									
										<div class="greeting"><h3>Special Fares to</h3></div>
										<div class="greeting2"><h2>Relax Hostel</h2></div>
										<div class="service-block">
											<i class="fa fa-wifi"></i>
											<div>
												<h5>Free WI-FI</h5>
												<span>in Whole hostel</span> 
											</div>
										</div>
										<div class="service-block">
											<i class="fa fa-television"></i>
											<div>
												<h5>Cable TV</h5>
												<span>Free Cable TV</span> 
											</div>
										</div>
										<div class="service-block">
											<i class="fa fa-coffee"></i>
											<div>
												<h5>Resturant</h5>
												<span>Bar & Resturant</span> 
											</div>
										</div>
									</div>
								</div>
								<div class="room-finding">
									<div class="find-room">
										<div class="search-room">
											<h3>Search A Room</h3>
											
											<form    action='search.php' method='get'>
												<div>
													<label>
														<select name='type'>
															<option>Select Room Type</option>
															<option value='Single Room'>Single</option>
															<option value='Double Room'>Double</option>
															<option value='First Room'>First class</option>
														</select>
														<i class="fa fa-building-o"></i>
													</label>
												</div>
													
												
												<div>
													<label>
														<select name='adult'>
															<option>Adults</option>
															<option value='1'>1</option>
															<option value='2'>2</option>
															<option value='3'>3</option>
														</select>
														<i class="fa fa-angle-down"></i>
													</label>
												</div>
												<div>
													<label>
														<select name='child'>
															<option>Child</option>
															<option  value='1'>1</option>
															<option  value='2'>2</option>
															<option  value='3'>3</option>
														</select>
														<i class="fa fa-angle-down	"></i>
													</label>
												</div>
										
										</div>
										<div class="other-options">
											<input type="submit" name='search' class="searching" value="Search Now" />
											
										</div>
											</form>
									</div><!--find-room end-->
								</div><!--room-finding end-->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="about-us">
								<div class="title">
									<h3>About Relax Hostel</h3>
								</div><!--title end-->
								<h5><a href="about.html" title="">Discover what makes us a five star hostel</a></h5>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi.</p>
								<ul class="ab-links">
									<li><i class="fa fa-user-secret"></i>Dedicated Team</li>
									<li><i class="fa fa-user"></i>Best Advisors</li>
									<li><i class="fa fa-history"></i>24/7 Supports</li>
								</ul>
							</div><!--about-us end-->
						</div>
						<div class="col-md-8">
							<div class="fav-areas">
								<div class="title f2">
									<h3>Our Favorite Rooms</h3>
								</div><!--title end-->
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy magna aliquam erat volutpat. Ut wisi enim ad minim</p>
								<div class="row">
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room1.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title=""> Single Room</a></h3>
											
											</div>
										</div><!--fav-room end-->
									</div>
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room2.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title="">Double Room</a></h3>
												
											</div>
										</div><!--fav-room end-->
									</div>
									<div class="col-md-4">
										<div class="fav-room">
											<img src="images/resources/fav-room3.jpg" alt="">
											<div class="fav-rm-data">
												<h3><a href="#" title="">First Class Room</a></h3>
											
											</div>
										</div><!--fav-room end-->
									</div>
								</div>
							</div><!--fav areas end-->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="pd2 bg bg1 overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="ft-img thumb-carousel" data-slider-id="1">
								<div>
									<figure>
										<img src="images/resources/ft-img3.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img4.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img2.jpg" alt="">
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="our-services">
								<div class="title f2">
									<h3>Our Awesome Services</h3>
								</div><!--title end-->
								<div class="service-thumbs owl-thumbs" data-slider-id="1">
									<div class="service owl-thumb-item">
										<img src="images/icon1.png" alt="">
										<h4>Restaurant</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon2.png" alt="">
										<h4>Spa - Beauty & Health</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon3.png" alt="">
										<h4>Conference Room</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon4.png" alt="">
										<h4>Swimming Pool</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
									</div><!--service end-->
								</div>
							</div><!--our-services end-->
						</div>
					</div>
				</div>
			</div>
		</section>	


		<section>
			<div class="block remove-btm-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="title f3">
								<h3>Our Gallery</h3>
							</div>
							<div class="options">
								<div class="option-isotop">
									<ul id="filter" class="option-set filters-nav" data-option-key="filter">
										<li><a class="selected" data-option-value="*">Rooms Highligts</a></li>
									
									</ul>
								</div>
							</div><!-- FILTER BUTTONS -->
						</div>
						<div class="col-md-10">
							<div class="row gallery grid">
								<div class="col-md-5 col-sm-5 col-xs-5 rooms swimming">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/01.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery1.jpg" data-group="set1" href="images/resources/gallery1.jpg" title="home 1"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


								<div class=" col-md-2 col-sm-2 col-xs-2  kitchen">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/02.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery2.jpg" data-group="set1" href="images/resources/gallery2.jpg" title="home 2"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


								<div class="col-md-5 col-sm-5 col-xs-5 dinning bath">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/03.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery3.jpg" data-group="set1" href="images/resources/gallery3.jpg" title="home 3"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>



								<div class="col-md-5  col-sm-5 col-xs-5  bath rooms">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/04.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery4.jpg" data-group="set1" href="images/resources/gallery4.jpg" title="home 4"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>



								<div class=" col-md-7 col-sm-7 col-xs-7  swimming kitchen">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/05.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery5.jpg" data-group="set1" href="images/resources/gallery5.jpg" title="home 5"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="pd-btm-less">
				<div class="container">
					<div class="partners-logo">
						
					</div><!--partners-logo end-->
				</div>
			</div>
		</section>

		



		<section>
			<div class="block no-padding">
				<div class="newsletter">
					<div class="bg bg2">
						<div class="container">
							<div class="stay-tuned">
								<h2>Stay tuned with us</h2>
								<h5>Get our updated offers, discounts, events and much more!</h5>
							</div>
							<div class="email-form">
								<form>
									<input name="" placeholder="Enter your email address" type="text">
									<button type="submit">Subscribe</button>
								</form>
							</div><!--email-form end-->
						</div>
					</div>
				</div><!--newsletter end-->
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
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Including Bootstrap js file -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<script type="text/javascript" src="js/wow.js"></script>

<!-- Custom Js file -->
<script type="text/javascript" src="js/script.js"></script>


</body>



</html>