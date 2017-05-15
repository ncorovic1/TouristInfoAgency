<?php
	if( !isset($_GET['id']) ) 
		header('Location: http://infobosniatours.com/');
	else if( $_GET['id'] == "" || $_GET['id'] < 0 ) 
		header('Location: http://infobosniatours.com/');
?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Info Bosnia</title>
	<meta name="description" content="The best tourist agency in Sarajevo" />
	<meta name="keywords" content="Sarajevo, tour, booking, trip, travel, tourism, tourist, holiday, hotel, vacation" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="images/ico/logo.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	<link href="css/elements.css" rel="stylesheet">
	
	<!-- CSS Font Icons -->
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	<script src="js/my_js.js"></script>
	
</head>

<body class="">
	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<header id="header">
	  
			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">

				<div class="navbar-top">
				
					<div class="container">
						
						<div class="flex-row flex-align-middle">
							<div class="flex-shrink flex-columns">
								<a class="navbar-logo" href="index.html">
									<img src="images/infobosnia copy.png" alt="Logo" />
								</a>
							</div>
							<div class="flex-columns">
								<div class="pull-right">
								
									<div class="navbar-mini">
										<ul class="clearfix">
											<li>
												<a id="desneIkone" class="navbar-logo1" href="index.html">
													<img src="images/tripadvisor.png" alt="Logo" />
												</a>
											</li>
											<li>
												<a id="desneIkone" class="navbar-logo1" href="contact_us.php#contact_us">
													<img src="images/mail.png" alt="Logo" />
												</a>
											</li>
											<li>
												<a id="desneIkone" class="navbar-logo1" href="https://www.instagram.com/infobosniatours/">
													<img src="images/partner/02.png" alt="Logo" />
												</a>
											</li>
											<li>
												<a id="desneIkone" class="navbar-logo1" href="https://www.facebook.com/InfoBosnia/">
													<img src="images/fb.png" alt="Logo" />
												</a>
											</li>
											<li class="dropdown bt-dropdown-click hidden-xs">
												<a id="currncy-dropdown" class="dropdown-toggle" data-toggle="dropdown"
												role="button" aria-haspopup="true" aria-expanded="false">
													<i class="ion-android-globe hidden-xss"></i> English
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#">English</a></li>
													<li><a href="german.php">German</a></li>
													<li><a href="turkish.php">Turkish</a></li>
												</ul>
											</li>
											
											<li class="dropdown bt-dropdown-click visible-xs">
												<a id="currncy-language-dropdown" class="dropdown-toggle" 
												data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#">English</a></li>
													<li><a href="german.php">German</a></li>
													<li><a href="turkish.php">Turkish</a></li>
												</ul>
											</li>
											
											<!--<li class="user-action">
												<a data-toggle="modal" href="#loginModal" class="btn">Sign up/in</a>
											</li>-->

										</ul>
									</div>
						
								</div>
							</div>
						</div>

					</div>
					
				</div>
				
				<div class="navbar-bottom hidden-sm hidden-xs">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-9">
								
								<div id="navbar" class="collapse navbar-collapse navbar-arrow">
									<ul class="nav navbar-nav" id="responsive-menu">									
										
										<li><a href="index.php">Home</a></li>
										<li><a href="index.php#top-tours">Top Tours</a>
											<ul>
												<li><a href="mostar.php">Mostar</a></li>
												<li><a href="times-of-misfortune.php">Times of Misfortune</a></li>
												<li><a href="bijambare.php">Bijambare Cave</a></li>
												<li><a href="free-tour.php">Free Tour</a></li>
												<!--<li>
													<a href="#">Sub-menu</a>
													 <ul>
														<li><a href="#">Sub-menu 2</a></li>
														<li><a href="#">Sub-menu 2</a></li>
														<li><a href="#">Sub-menu 2</a></li>
													</ul>
												</li>-->
											</ul>
										</li>
										<li><a href="index.php#tours">Tours</a>
											<ul>
												<li><a href="tunel.php">Tunnel Tour</a></li>
												<li><a href="times-of-misfortune.php">Times of Misfortune</a></li>
												<li><a href="free-tour.php">Free Tour</a></li>
												<li><a href="grand-tour.php">Sarajevo Grad Tour</a></li>
												<li><a href="islam.php">Get to know Islam</a></li>
												<li><a href="JCI.php">Judaism, Christianity and Islam</a></li>
											</ul>
										</li>
										<li><a href="index.php#excursions">Excursions</a>
											<ul>
												<li><a href="mostar.php">Mostar and Herzegovina Cities</a></li>
												<li><a href="travnik-jajce.php">Travnik-Jajce</a></li>
												<li><a href="dubrovnik.php">Dubrovnik</a></li>
												<li><a href="srebrenica.php">Srebrenica</a></li>
											</ul>
										</li>
										<li><a href="index.php#adventures">Adventures</a>
											<ul>
												<li><a href="rafting.php">Rafting</a></li>
												<li><a href="lukomir.php">Lukomir</a></li>
												<li><a href="skakavac.php">Skakavac</a></li>
												<li><a href="bijambare.php">Bijambare</a></li>
											</ul>
										</li>
										<li><a href="about.php">About us</a></li>
										<li><a href="contact_us.php">Contact</a></li>
									</ul>
								</div><!--/.nav-collapse -->
								
							</div>
							
							<div class="col-sm-3">
							
								<div class="navbar-phone"><i class="fa fa-phone"></i> 
									<a href="tel:+0038761076756">Call us: +(00) 387 61 076 756</a>
								</div>
							
							</div>

						</div>
						
					</div>
				
				</div>

				<div id="slicknav-mobile"></div>
				
			</nav>
			<!-- end Navbar (Header) -->

		</header>
		
		<div class="clear"></div>
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
			
			<div class="breadcrumb-wrapper bg-light-2">
				
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="">Search</a></li>
						<li><a href="#">Result</a></li>
						<li><a href="#">Detail</a></li>
						<li><a href="#">Payment</a></li>
						<li><span>Confirmation</span></li>
					</ol>
					
				</div>
				
			</div>
			<?php 
				include 'paypal/fetchById.php'; 
				$tour = fetchById($_GET['id']);
		    	$datum = $tour['dep_month'] . ' ' . $tour['dep_day'] . ', ' . $tour['dep_year'];
			?>
			<div class="content-wrapper">
			
				<div class="container">
			
					<div class="row">
					
						<div class="col-sm-8 col-md-9">
	
							<div class="confirmation-wrapper">
							
								<div class="payment-success">
								
									<div class="icon">
										<i class="pe-7s-check text-success"></i>
									</div>
								
									<div class="content">
										
										<h2 class="heading uppercase mt-0 text-success">Thank you, your booking is complete!</h2>
										<p>Your confirmation code is <span class="text-primary font700"><?php echo $tour['confirmation']; ?></span></p>
									
									</div>
									
								</div>
							
								<div class="confirmation-content">
									<div class="section-title text-left">
										<h4>Booking Information</h4>
									</div>
								
									<ul class="book-sum-list">
										<li><span class="font600">Booking Number: </span><?php echo $tour['id']; 		?></li>
										<li><span class="font600">First Name: 	  </span><?php echo $tour['full_name']; ?></li>
										<li><span class="font600">Package Name:   </span><?php echo $tour['tour']; 	    ?></li>
										<li><span class="font600">Persons:        </span><?php echo $tour['num']; 	    ?></li>
										<li><span class="font600">Date: 		  </span><?php echo $datum;     	    ?></li>
										<li><span class="font600">Email: 		  </span><?php echo $tour['email']; 	?></li>
										<li><span class="font600">Phone Number:   </span><?php echo $tour['phone']; 	?></li>
									</ul>
									
								</div>
								
								<div class="confirmation-content">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d427.64230739134064!2d18.42768558580513!3d43.859495822692075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1481069597013" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								
								<div class="confirmation-content">
								
									<div class="section-title text-left">
										<h4>Payment</h4>
										
									</div>
								
									<p>Prepared do an dissuade be so whatever steepest. Yet
									her beyond looked either day wished nay. By doubtful disposed do juvenile an.
									Now curiosity you explained immediate why behaviour. An dispatched
									impossible of of melancholy favourable. Our quiet not heart along 
									scale sense timed. Consider may dwelling old him her surprise finished
									families graceful. Gave led past poor met fine was new.</p>
										
								</div>
								
								<div class="confirmation-content">
								
									<div class="section-title text-left">
										<h4>Additional Information</h4>
									</div>
									
									<p>Abilities or he perfectly pretended so strangers be exquisite.
									Oh to another chamber pleased imagine do in. Went me rank at last
									loud shot an draw. Excellent so to no sincerity smallness. Removal
									request delight if on he we. Unaffected in we by apartments 
									astonished to decisively themselves. Offended ten old consider speaking.</p>
								
								</div>
								
								<button class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
								<button class="btn btn-primary btn-inverse"><i class="fa fa-envelope-o"></i> Sent to</button>
							
							</div>
							
						</div>

						<div class="col-sm-4 col-md-3 mt-50-xs">

							<aside class="sidebar with-filter">
							
								<div class="sidebar-inner">
								
									<div class="sidebar-module">
										<h4 class="heading mt-0">THANK YOU FOR BOOKING WITH INFOBOSNIA!</h4>
										<div class="sidebar-module-inner">
											<p class="mb-10">If you have any questions, feel free to call us, or to send your 
											quesion. You will get answer as soon as possible.</p>
											<ul class="help-list">
												<li><span class="font600">Call us: </span><a href="tel:+0038761076756"> +(00) 387 61 076 756</a></li>
												<li><span class="font600">Email</span>: info@infobosniatours.com</li>
												<li><span class="font600">Viber/ WatsApp</span><a href="tel:+0038761076756"> +(00) 387 61 076 756</a></li>
											</ul>
										</div>
									</div>
									
									
									<div class="sidebar-module">
										<h4 class="heading mt-0">Why booking with us?</h4>
										<div class="sidebar-module-inner">
											<ul class="featured-list-sm">
												<li>
													<span class="icon"><i class="fa fa-thumbs-up"></i></span>
													<h6 class="heading mt-0">No Booking Charges</h6>
													We don't charge you an extra fee for booking with us
												</li>
												<li>
													<span class="icon"><i class="fa fa-credit-card"></i></span>
													<h6 class="heading mt-0">5% Discount</h6>
													If you book via PayPal, you get this amazing discount.
												</li>
												<li>
													<span class="icon"><i class="fa fa-inbox"></i></span>
													<h6 class="heading mt-0">Instant Confirmation</h6>
													Instant booking confirmation whether booking online or via the telephone.
												</li>
												<li>
													<span class="icon"><i class="fa fa-calendar"></i></span>
													<h6 class="heading mt-0">Flexible Booking</h6>
													You can book up to a whole year in advance or right up until the moment of your stay
												</li>
											</ul>
										</div>
									</div>
									
								</div>
								
							</aside>

						</div>

					</div>
				
				</div>
					
			</div>

		</div>
		<!-- end Main Wrapper -->

		<footer class="footer">
			
			<div class="container">
			
				<div class="main-footer">
				
					<div class="row">
				
						<div class="col-xs-12 col-sm-5 col-md-3">
						
							<div class="footer-logo">
								<img src="images/infobosnia copy.png" alt="Logo" />
							</div>
							
							<p class="footer-address">2 Velika Avlija, Bosnia and Herzegovina, Sarajevo 71000 <br/> 
								<i class="fa fa-phone"></i>
								<a href="tel:+0038761076756"> +(00) 387 61 076 756 <br/> 
								<i class="fa fa-envelope-o"></i> 
								<a href="contact_us.php#contact_us">info@infobosniatours.ba</a>
							</p>
							
							<div class="footer-social">
							
								<a href="#" data-toggle="tooltip" data-placement="top" title="Secured Website">
								<img src="images/ion.png" class="fa footer-logo1" alt="Logo"/></a>
								<a href="https://www.facebook.com/InfoBosnia/" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/InfoBosniaTours" data-toggle="tooltip" data-placement="top" title="Twitter">
								<i class="fa fa-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus">
								<i class="fa fa-google-plus"></i></a>
								<a href="https://www.instagram.com/infobosniatours/" data-toggle="tooltip" data-placement="top" title="Instagram">
								<i class="fa fa-instagram"></i></a>
								
							
							</div>
							
							<p class="copy-right">Developed by <a href="http://www.violetvision.ba/" style="color: #BA55D3;">Violet Vision</a> &#169; </p>
							
						</div>
						
						<div class="col-xs-12 col-sm-7 col-md-9">

							<div class="row gap-10">
							
								<div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-3 mt-30-xs">
								
									<h5 class="footer-title">Menu</h5>
									
									<ul class="footer-menu">
									
										<li><a href="index.php">Home</a></li>
										<li><a href="index.php#top-tours">Top Tours</a></li>
										<li><a href="index.php#tours">Tours</a></li>
										<li><a href="index.php#excursions">Excursions</a></li>
										<li><a href="index.php#adventures">Adventures</a></li>
										<li><a href="about.php">About us</a></li>
										<li><a href="contact_us.php">Contact</a></li>
										
									</ul>
									
								</div>
								
								<div class="col-xs-12 col-sm-4 col-md-3 mt-30-xs">

									<h5 class="footer-title">Tours in Sarajevo</h5>
									
									<ul class="footer-menu">
									
										<li><a href="times-of-misfortune.php">Times of Misfortune</a></li>
										<li><a href="tunel.php">Tunnel Tour</a></li>
										<li><a href="grand-tour.php">Sarajevo Grad Tour</a></li>
										<li><a href="islam.php">Get to know Islam</a></li>
										<li><a href="JDI.php">Judaism, Christianity and Islam</a></li>
										<li><a href="skakavac.php">Skakavac</a></li>
										<li><a href="free-tour.php">Free Tour</a></li>
										
									</ul>
									
								</div>
								
								<div class="col-xs-12 col-sm-4 col-md-3 mt-30-xs">

									<h5 class="footer-title">Excursions and adventures</h5>
									
									<ul class="footer-menu">
									
										<li><a href="mostar.php">Mostar and Herzegovina Cities</a></li>
										<li><a href="travnik-jajce.php">Travnik-Jajce</a></li>
										<li><a href="dubrovnik.php">Dubrovnik</a></li>
										<li><a href="srebrenica.php">Srebrenica</a></li>
										<li><a href="rafting.php">Rafting</a></li>
										<li><a href="lukomir.php">Lukomir</a></li>
										<li><a href="bijambare.php">Bijambare</a></li>
										
									</ul>
									
								</div>
								
							</div>

						</div>
						
					</div>

				</div>
				
			</div>
			
		</footer>

	</div>  <!-- end Container Wrapper -->
 

 
<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end Back To Top -->



<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/instagram.min.js"></script>
<script type="text/javascript" src="js/spin.min.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/select2.full.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/readmore.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/jquery.raty.js"></script> 
<script type="text/javascript" src="js/customs.js"></script>

</body>

</html>