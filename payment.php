<?php
	if( !isset($_GET['id']) ) 
		header('Location: http://infobosniatours.com/');
	else if( $_GET['id'] == "" || $_GET['id'] < 0 || $_GET['id'] > 12) 
		header('Location: http://infobosniatours.com/');
?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Booking | Info Bosnia | Explore heart shaped land with us!</title>
	<meta name="description" 	content="Explore heart shaped land with us!" />
	<meta name="keywords" 		content="Tour, booking, trip, travel, holiday, vacation" />
	<meta name="author" 		content="InfoBosnia">
	<meta name="viewport" 		content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" 		content="Tour, booking, trip, travel, holiday, vacation" />
    <meta name="googlebot" 		content="Tour, booking, trip, travel, holiday, vacation" />
	<meta property="og:title" 			  content="InfoBosnia Tour Agency" />
	<meta property="og:type" 			  content="article" />
	<meta property="og:image" 			  content="img/footer.png" />
	<meta property="og:url" 			  content="http://infobosniatours.ba" />
	<meta property="og:description" 	  content="Explore heart shaped land with us!" />
	
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
	<script src="js/payment.js"></script>
	<script src="js/jquery.terms.js"></script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
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
												<a id="desneIkone" class="navbar-logo1" href="https://www.tripadvisor.com/Attraction_Review-g294450-d12116587-Reviews-InfoBosnia_Tours-Sarajevo_Sarajevo_Canton.html">
													<img src="images/tripadvisor.png" alt="Logo" />
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
												<li><a href="grand-tour.php">Sarajevo Grand Tour</a></li>
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
						<li><a href="">Excursions</a></li>
						<li><a href="#">Mostar and Hercegovina cities</a></li>
						<li><span>Payment</span></li>
						<li><span>Confirmation</span></li>
					</ol>
					
				</div>
				
			</div>
			
			<div class="content-wrapper">
			
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-9" role="main">
							<div class="section-title text-left">
                                <?php
                                    $tours  = array("Dubrovnik", "Srebrenica", "Travnik-Jajce", "Rafting", "Skakavac",                     "Bijambare", "Lukomir", "Times of Misfortune", 
                                                    "Judaism, Christianity and Islam", "Tunnel Tour", "Get to know Islam", 
                                                    "Mostar and Herzegovina Cities", "Sarajevo Grand Tour", "Free Tour");
                                ?>
								<h3> <?php echo $tours[$_GET['id']]; ?> </h3>					
							</div>
							
							<div class="payment-container">
							
								<form action="paypal/checkout.php" method="post" autocomplete="off">
									<!-- <input type="hidden" name="tourName" value="<?php echo $_GET['tour']; ?>"> -->
									<input type="hidden" name="tourName" value="<?php echo $_GET['id']; ?>">
									<div class="payment-box">
										<div class="payment-header clearfix">		
											<div class="number">
												1
											</div>
											<div class="row gap-10">
												<div class="col-sm-9">
													<h5 class="heading mt-0">Select Your departure date</h5>
												</div>								
											</div>
                                            <div class="section-title text-left">
                                                <h4>Availability</h4>
                                            </div>
                                            <div class="row mb-20">
                                                <div class="col-sm-6" >														
														<div class="form-group form-icon">
															<i class="fa fa-calendar"></i>
															<select name="year" class="select2-multi form-control" 
															data-placeholder="Choose a Departure Year" required multiple>
																<option value="">Choose a Departure Year</option>
																<option value="2">2017</option>
																<option value="3">2018</option>
															</select>
														</div>
														<div class="form-group form-icon">
															<i class="fa fa-calendar"></i>
															<select name="month" class="select2-multi form-control" 
															data-placeholder="Choose a Departure Month" required multiple>
																<option value="">Choose a Departure Month</option>
																<option value="1">January</option>
																<option value="2">February</option>
																<option value="3">March</option>
																<option value="4">April</option>
																<option value="5">May</option>
																<option value="6">June</option>
																<option value="7">July</option>
																<option value="8">August</option>
																<option value="9">September</option>
																<option value="10">October</option>
																<option value="11">November</option>
																<option value="12">December</option>
															</select>
														</div>
														<div class="form-group form-icon">
															<i class="fa fa-calendar"></i>
															<select name="day" class="select2-multi form-control" 
															data-placeholder="Choose a Departure Day" onblur="checkDate(this)" required multiple>
																<option value="">Choose a Departure Day</option>
																<option value="1">  1</option>
																<option value="2">  2</option>
																<option value="3">  3</option>
																<option value="4">  4</option>
																<option value="5">  5</option>
																<option value="6">  6</option>
																<option value="7">  7</option>
																<option value="8">  8</option>
																<option value="9">  9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
																<option value="24">24</option>
																<option value="25">25</option>
																<option value="26">26</option>
																<option value="27">27</option>
																<option value="28">28</option>
																<option value="29">29</option>
																<option value="30">30</option>
																<option value="31">31</option>
															</select><p style="float: right;" id="checkDate"></p>
														</div>
													</div>
												</div>
											
										</div>
									</div>
									
									
									
									<div class="payment-box">
									
										<div class="payment-header clearfix">
										
											<div class="number">
												2
											</div>
											
											<h5 class="heading mt-0">Traveller Details</h5>
										
										</div>
										
										<div class="payment-content">
											
											<div class="payment-traveller">
													
												<div class="form-horizontal">
													<div class="form-group gap-20">
														<label class="col-sm-3 col-md-2 control-label">Full Name:</label>
														<div class="col-sm-5 col-md-4">
															<input type="text" name="fullname" onblur="checkName(this)" required class="form-control">
															<p id="checkName" style="float: right;"></p>
														</div>
													</div>
												</div>
												
												<div class="form-horizontal">
													<div class="form-group gap-20">
														<label class="col-sm-3 col-md-2 control-label">Email:</label>
														<div class="col-sm-5 col-md-4">
															<input type="email" name="email" onblur="checkEmail(this)" placeholder="abc@abc.abc" required class="form-control">
															<p id="checkEmail" style="float: right;"></p>
														</div>
													</div>
												</div>
												
												<div class="form-horizontal">
													<div class="form-group gap-20">
														<label class="col-sm-3 col-md-2 control-label">No. of people:</label>
														<div class="col-sm-5 col-md-4">
															<select name="num" class="form-control" required value="1">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
															<p id="checkNum" style="float: right;"></p>
														</div>
													</div>
												</div>
												
												<div class="form-horizontal">
													<div class="form-group gap-20">
														<label class="col-sm-3 col-md-2 control-label">Phone Number:</label>
														<div class="col-sm-5 col-md-4">
															<input type='tel' name="phone" onblur="checkPhone(this)" required class="form-control">
															<p id="checkPhone" style="float: right;"> </p>
														</div>
													</div>
												</div>
												
											</div>
											
										</div>
										
									</div>
									
									
									<div class="payment-box">
									
										<div class="payment-header clearfix">
										
											<div class="number">
												3
											</div>
											
											<h5 class="heading mt-0">Finish Payment <small>/ <i class="fa fa-lock"></i> secure</small></h5>

										</div>
										
										<div class="payment-content">
											
											<p><b>If You would like to book tour for FREE, skip this step!</b></p>
											
											<div class="alert alert-info" role="alert">
											<i class="fa fa-info-circle"></i> By booking via PayPal, You will 
											recieve 5% discount on every tour! To receive discount, tour 
											needs to be booked at least 3 days in advance!
											</div>
											
											<div id="paymentOption" class="payment-option-wrapper">
	
												<div class="row">
													
													<div class="clear">
													</div>

													<div class="col-sm-12">
														<div class="radio-block" style="display: inline-block;">
															<input id="payments2" name="payments" style="width: 20px; display: inline-block;" type="checkbox" class="radio" onchange="showHide()" value="paymentPaypal"/>
															<label class="" for="payments2" style="display: inline-block; position: relative; top: -10px;"></label>
															<img style="display: inline-block;" src="http://image.flaticon.com/icons/png/128/196/196566.png" alt="Image">
															<img style="display: inline-block;" src="images/cc.jpg" alt="Image">
														</div>
													</div>
													
												</div>
												<br>
												
												<div id="paymentPaypal" class="payment-option-form">
													<div class="inner">
														<p>The booking amount will be debited from your account once the booking is completed.</p>
														<p>After clicking 'Book Now' you will be directed to Paypal to complete payment. 
														<strong>You must complete the process or the discount will not be achieved. 
														</strong> 
														Afterwards you will be redirected to us again for booking information confirmation. 
														</p>											
													</div>
													
												</div>
											</div>					
											
											<div class="container">
											  	<!-- Trigger the modal with a button -->
												By submitting a booking request, you accept our <a data-toggle="modal" href="#myModal1">terms and conditions</a> as well as <a data-toggle="modal" href="#myModal2">cancelation policy</a>!
												<!-- Modal -->
												<div id="myModal1" class="modal fade" role="dialog">
													<div class="modal-dialog">
														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Terms and conditions</h4>
															</div>
															<div class="modal-body">
																<p>	These Terms and Conditions contain legal obligations and 
																	InfoBosnia Tours encourages you to read them carefully. It is 
																	under these Terms and Conditions that bookings are made and 
																	accepted by InfoBosnia Tours. Unless otherwise stated, any 
																	purchases made through www.infobosniatours.com are subject 
																	to these Terms & Conditions. When a Customer makes a booking
																	it will be deemed they have accepted the Terms & Conditions on 
																	behalf of all individuals included in the booking and consents
																	to these Terms & Conditions by using www.infobosniatours.com.
																	No alterations or variations to these Terms & Conditions will
																	be accepted unless agreed in writing by InfoBosnia Tours. <br><br>
																	
																	Accident or Loss<br><br>
																	Please take care of all personal property. InfoBosnia 
																	Tours will not be liable for any theft,  loss, damage,
																	 delay, inconvenience, direct or consequential loss, 
																	 however caused, unless  due to negligence by InfoBosnia
																	 Tours, in which case our liability is limited (except
																	 for death  or personal injury) for damages to a maximum 
																	 of the refund of the ticket price. <br><br>
																	 
																	Personal Safety<br><br>
																	Each Customer is responsible for maintaining their safety
																	 at all times. By agreeing to take part  on the tour, all 
																	 Customers are agreeing to listen to the safety instructions
																	 given by the Guide  and to exercise due care and attention
																	 whilst walking.<br><br>
																	 
																	Customer Conduct & Safety<br><br>
																	InfoBosnia Tours may, at our discretion, require any person
																	 to be excluded from a tour if InfoBosnia Tours deems his or 
																	 her conduct to be offensive or a nuisance to other Customers.
																	 InfoBosnia Tours also reserves the right to refuse access
																	 to participate on a particular tour should  circumstances
																	 be deemed to compromise tour safety.<br><br>
																	 
																	TICKETS<br><br>
																	 
																	Prices<br><br>
																	The prices appearing on the website are the current rates
																	 and can change with no prior  notice. Once a Customer has
																	 booked a tour with Fun London Tours, the Customer will 
																	 not be  required to pay any difference in the event of 
																	 a price increase and Fun London Tours will not  refund 
																	 the balance of any price reduction. All prices are per 
																	 person unless otherwise stated.<br><br>
																	 
																	Ticket Validity<br><br>
																	Customers must bring their valid ticket to the tour. The 
																	Tour Guide will have a list of people  who are expected, 
																	but your ticket will be required to confirm payment, and
																	 also necessary in  the event of last minute bookings 
																	 and/or booking error. Your e-ticket entitles the named 
																	 Customer to join the tour on the date specified. It cannot
																	 be  used for another person, or for another day. <br><br>
																	 
																	Cancellations by Customers<br><br>
																	It is not possible to make changes to existing bookings, 
																	unless InfoBosnia Tours receives  notification 72 hours 
																	in advance, in writing, to info@infobosniatours.com<br><br>
																	 
																	Cancellations by InfoBosnia Tours<br><br>
																	In the unlikely event of a tour being cancelled we will 
																	offer an alternative tour date or refund.<br><br>
																	 
																	Arriving late for a tour<br><br>
																	The tour will start at the time stated. Unfortunately, 
																	the guide will not be able to answer their phone to give
																	 you directions you once the tour has started. If you
																	 call the guide before the tour starts, they may be able
																	 to direct you to a place where you can join the group,
																	 but this is not always possible. We do not offer refunds
																	 to people who miss the tour because they are late.<br><br>
																	 
																	Refunds<br><br>
																	If you are not happy with the tour and would like to 
																	request a refund, please state your  reasons clearly 
																	in an email to info@infobosniatours.com. This does not 
																	include Customers who  failed to turn up for their tour
																	 at the designated time.<br><br>
																</p>
															</div>
															<div class="modal-footer" style="text-align: center;">
																<button type="button" class="btn btn-default" data-dismiss="modal" style="color: #DE261D; border: 2px solid #DE261D; background-color: white; font-weight: 800;">I agree</button>
															</div>
														</div>
													</div>
												</div>
												<div id="myModal2" class="modal fade" role="dialog">
													<div class="modal-dialog">
														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Cancelation policy</h4>
															</div>
															<div class="modal-body">
																<p>	In order to provide the highest level of service 
																	with top guides and guaranteed tour departures, 
																	cancellations and amendments may be subject to 
																	fees. The policy applies to all group and private
																	tours listed and booked through www.infobosniatours.com
																	or InfoBosnia Tourist Information Centre, on a per 
																	person and per tour basis. <br><br>
				 
																	GROUP TOURS & ACTIVITIES:<br><br>
																	<ul>
																		<li>•	Cancellations received greater than 72 hours prior to tour commencement are fully refundable.</li>
																		<li>•	Cancellations received within 72 hours of tour commencement are non-refundable.</li>
																		<li>•	Amendment requests are subject to availability and price changes.</li>
																	</ul><br><br>
																	
																	PRIVATE TOURS & ACTIVITIES:<br><br>
																	<ul>
																		<li>•	Cancellations received greater than 7 days prior to tour commencement are fully refundable.</li>
																		<li>•	Cancellations received within 7 days of tour commencement are non-refundable.</li>
																		<li>•	All amendments made to private tours may be subject to an administrative fee up to 20%.</li>
																	</ul><br><br>
																	
																	PAYPAL/DEBIT/CREDIT CARD INTERNET RESERVATION:<br><br>
																	<ul>
																		<li>•	Cancellations received greater than 72 hours prior to tour commencement 80% refundable, due to PayPal commission. </li>
																		<li>•	Cancelation for private tours & activities received greater than 7 days prior to tour commencement are 80% refundable, due to PayPal commission</li>
																		<li>•	Cancellations received within 72 hours of tour commencement are non-refundable.</li>
																		<li>•	Cancellations for private tours & activities received within 7 days of tour commencement are non-refundable.</li>
																		<li>•	Amendment requests are subject to availability and price changes.</li>
																	</ul><br><br>
																	
																	PLATE ARRIVALS & NO SHOWS:<br><br>
																	<ul>
																		<li>•	Late arrivals and no shows are non-refundable. This is applicable to any tour participant 
																		that fails to arrive, or arrives after tour departure.</li>
																	</ul><br><br>
																	 
																	CHANGES TO THIS POLICY:<br><br>
																	From time to time, the terms of this policy 
																	may change at the Company's discretion. In 
																	the event of such changes, the new policy 
																	will apply for all tours booked after the
																	date and time of the policy change. For any
																	further questions about our cancellation 
																	policy, please feel free to e-mail us at 
																	info@infobosniatours.com. There is a good 
																	chance we’ve answered your question on our
																	FAQ page, but if not, the best way to 
																	contact us for non-urgent matters us is 
																	by email at info@infobosniatours.com. Our
																	team will get back to you within 24 hours
																	with a full response. <br><br>
                                                                </p>
															</div>
															<div class="modal-footer" style="text-align: center;">
																<button type="button" class="btn btn-default" data-dismiss="modal" style="color: #DE261D; border: 2px solid #DE261D; background-color: white; font-weight: 800;">I agree</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>									
									<div class="row mt-20">
										<div class="col-sm-8 col-md-6">
											<input type="submit" name="submit" class="btn btn-primary" value="Book Now">
										</div>
									</div>
								</form>
							</div>
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
								<a href="contact.html">info@infobosniatours.com</a><br/>
								<i class="fa fa-clock-o"></i>
								<a href="contact_us.php#contact_us">09:00 - 20:00</a>
							</p>
							
							<div class="footer-social">
							
								<a href="http://ion.ba/" data-toggle="tooltip" data-placement="top" title="Secured Website">
								<img src="images/ion.png" class="fa footer-logo1" alt="Logo"/></a>
								<a href="https://www.facebook.com/InfoBosnia/" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/InfoBosniaTours" data-toggle="tooltip" data-placement="top" title="Twitter">
								<i class="fa fa-twitter"></i></a>
								<a href="https://www.tripadvisor.com/Attraction_Review-g294450-d12116587-Reviews-InfoBosnia_Tours-Sarajevo_Sarajevo_Canton.html" data-toggle="tooltip" data-placement="top" title="Trip Advisor">
								<i class="fa fa-tripadvisor"></i></a>
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

<script>

/**
*  Sidebar Sticky
*/

!function ($) {

  $(function(){

    var $window = $(window)
    var $body   = $(document.body)

    var navHeight = $('.navbar').outerHeight(true) + 50

    $body.scrollspy({
      target: '.scrollspy-sidebar',
      offset: navHeight
    })

    $window.on('load', function () {
      $body.scrollspy('refresh')
    })

    $('.scrollspy-container [href=#]').click(function (e) {
      e.preventDefault()
    })

    // back to top
    setTimeout(function () {
      var $sideBar = $('.scrollspy-sidebar')

      $sideBar.affix({
        offset: {
          top: function () {
            var offsetTop      = $sideBar.offset().top
            var sideBarMargin  = parseInt($sideBar.children(0).css('margin-top'), 10)
            var navOuterHeight = $('.scrollspy-nav').height()

            return (this.top = offsetTop - navOuterHeight - sideBarMargin)
          }
        , bottom: function () {
            return (this.bottom = $('.scrollspy-footer').outerHeight(true))
          }
        }
      })
    }, 100)
		
  })

}(window.jQuery)

</script>

</body>

</html>