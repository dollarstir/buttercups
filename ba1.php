<?php include 'core.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Book Your Travel - Online Booking HTML Template">
	<meta name="description" content="Book Your Travel - Online Booking HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Buttercups Tour - Booking</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/theme-turqoise.css" id="template-color" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800%7CRoboto+Slab:400,700&subset=latin,latin-ext,greek-ext,greek,cyrillic,vietnamese,cyrillic-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/styler.css" type="text/css" />
	
	 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--- loading animation -->
	<div class="loading">
		<div class="ball"></div>
		<div class="ball1"></div>
	</div>
	<!--- //loading animation -->
	
	<!--header-->
	<?php hbar();?>
	<!--//header-->
	
	<!--main-->
	<main class="main">		
		<div class="wrap">
			<!--breadcrumbs-->
			
			<!--//breadcrumbs-->
			
			<div class="row">
				<!--three-fourth content-->
				<div class="three-fourth">
					<form id="booking" method="post" action="booking-step2.html" class="static-content booking">
						<fieldset>
							<h2><span>01 </span>Traveller info</h2>
							<div class="row">
								<div class="f-item one-half">
									<label for="first_name">First name</label>
									<input type="text" id="first_name" name="first_name" />
								</div>
								<div class="f-item one-half">
									<label for="last_name">Last name</label>
									<input type="text" id="last_name" name="last_name" />
								</div>
							</div>
							
							<div class="row">
								<div class="f-item one-half">
									<label for="email">Email address</label>
									<input type="email" id="email" name="email" />
								</div>
								<div class="f-item one-half">
									<label for="confirm_email">Confirm email address</label>
									<input type="text" id="confirm_email" name="confirm_email" />
								</div>
								<span class="info">You’ll receive a confirmation email</span>
							</div>
							
							<div class="row">
								<div class="f-item one-half">
									<label for="address">Street Address an Number</label>
									<input type="text" id="address" name="address" />
								</div>
								<div class="f-item one-half">
									<label for="city">Town / City</label>
									<input type="text" id="city" name="city" />
								</div>
							</div>
							
							<div class="row">
								<div class="f-item one-half">
									<label for="zip">ZIP Code</label>
									<input type="text" id="zip" name="zip" />
								</div>
								<div class="f-item one-half">
									<label for="country">Country</label>
									<input type="text" id="country" name="country" />
								</div>
							</div>
							
							<div class="row">
								<div class="f-item full-width">
									<label>Special requirements: <span>(Not Guaranteed)</span></label>
									<textarea rows="10" cols="10"></textarea>
								</div>
								<span class="info">Please write your requests in English.</span>
							</div>
							
							<div class="row">
								<div class="f-item full-width">
									<input type="submit" class="gradient-button" value="Proceed to next step" id="next-step" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<!--//three-fourth content-->
				
				<!--right sidebar-->
				<aside class="one-fourth right-sidebar">
					<!--Booking details-->
					<article class="hotel-details booking-details">
						<h1>Best ipsum hotel 
							<span class="stars">
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
							</span>
						</h1>
						<span class="address">Marylebone, London</span>
						<span class="rating"> 8 /10</span>
						<dl class="booking-info">
							<dt>Rooms</dt>
							<dd>Standard twin room</dd>
							<dt>Room Description</dt>
							<dd>Room only</dd>
							<dt>Check-in Date</dt>
							<dd>14-11-12</dd>
							<dt>Check-out Date</dt>
							<dd>15-11-12</dd>
							<dt>Room(s)</dt>
							<dd>1 night, 1 room, max. 2 people. </dd>
						</dl>
						<div class="price">
							<p class="total">Total Price:  $ 55,00</p>
							<p>VAT (20%) included</p>
						</div>
					</article>
					<!--//Booking details-->
					
					<!--Need Help Booking?-->
					<article class="widget">
						<h4>Need Help Booking?</h4>
						<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your holiday needs.</p>
						<p class="number">+233(0)244044013</p>
					</article>
					<!--//Need Help Booking?-->
				</aside>
				<!--//right sidebar-->
			</div>
			<!--//main content-->
		</div>
	</main>
	<!--//main-->
	
	<!--footer-->
	<?php ft();?>
	<!---footer-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimmenu.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles <a href="booking-step1.html#"><img class="s-s-icon" src="images/settings.png" alt="Style switcher" /></a></h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="booking-step1.html#" class="yellow" title="yellow"></a></li>
				<li><a href="booking-step1.html#" class="orange" title="orange"></a></li>
				<li><a href="booking-step1.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="booking-step1.html#" class="pink" title="pink"></a></li>
				<li><a href="booking-step1.html#" class="purple" title="purple"></a></li>
				<li><a href="booking-step1.html#" class="blue" title="blue"></a></li>
				<li><a href="booking-step1.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="booking-step1.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
	<script src="js/styler.js"></script>
</body>
</html>