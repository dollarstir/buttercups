<?php include 'core.php';
include 'admin/db.php';

$bookingid = $_GET['boid'];

$getb = mysqli_query($conn,"SELECT *  FROM booking WHERE myref='$bookingid' ");

$row =mysqli_fetch_array($getb);

extract($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Butter cups - Online Booking ">
	<meta name="description" content="Buttercups - Online Booking">
	<meta name="author" content="favorchapel.com">
	
	<title>Buttercups Tour - Invoice</title>
	
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
					<form id="booking" method="post" action="booking" class="static-content booking">
						<fieldset>
							<h2><span></span>Confirmation</h2>
							<div class="text-wrap">
								<a href="#" class="gradient-button right print" title="Print booking" onclick="printpage()">Print booking</a>
								<p>Thank you. Your booking is now confirmed.</p>
							</div>
							
							<h3>Traveller info</h3>
							<div class="text-wrap">
								<div class="output">
									<p>Booking number:</p>
									<p><?php echo $myref;?></p>
									<p>Fist name: </p>
									<p><?php echo $fname;?></p>
									<p>Last name: </p>
									<p><?php echo $lname;?></p>
									<p>E-mail address: </p>
									<p><?php echo $email;?></p>
									<p>Street Address and number:</p>
									<p><?php echo $address;?></p>
									<p>  City / State: </p>
									<p><?php echo $state;?></p>
									<p>ZIP code: </p>
									<p><?php echo $zip;?></p>
									<p>Country:</p>
									<p><?php echo $country;?></p>
								</div>
							</div>
						
							<h3>Special requirements</h3>
							<div class="text-wrap">
								<p><?php echo $sp;?></p>
							</div>
							
							<h3>Payment</h3>
							<div class="text-wrap">
								<p>You have now confirmed and guaranteed your booking  </p>
								<!-- <p><strong class="dark">This hotel accepts the following forms of payment:</strong></p>
								<p>American Express, Visa, MasterCard</p> -->
							</div>
							
							<h3>Don’t forget</h3>
							<div class="text-wrap">
								<p>You can contact us on Email :<a href="mailto:macgranahamdavid@gmail.com">macgranahamdavid@gmail.com</a> or <a href="buttercupstours@outlook.com">buttercupstours@outlook.com</a>
							call us on +233(0)244044013	
							</p>
								<p><strong>We wish you a pleasant stay</strong><i>your Buttercups Tour team</i></p>
							</div>
						</fieldset>
					</form>
				</div>
				<!--//three-fourth content-->
			
				<!--right sidebar-->
				<aside class="one-fourth right-sidebar">
					<!--Booking details-->
					<article class="hotel-details booking-details">
						<h1><?php echo $title ;?> 
							<span class="stars">
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
							</span>
						</h1>
						
						<!-- <span class="rating"> 8 /10</span> -->
						<dl class="booking-info">
							<dt><strong>*</strong> Item Bought </dt>
							<dd><?php echo $type.' ('.$title.' )' ;?></dd>
							<dt><strong>*</strong>Number of Days </dt>
							<dd><?php echo $days;?></dd>
							<dt><strong>*</strong> Arrival Date</dt>
							<dd><?php echo $arrival ;?></dd>
							<dt><strong>*</strong> Departure Date</dt>
                            <dd><?php echo $departure ;?></dd>
                            
                            <dt><strong>*</strong> Arrival Time</dt>
							<dd><?php echo $arrivaltime ;?></dd>
							<dt><strong>*</strong> Departure Time</dt>
							<dd><?php echo $departuretime ;?></dd>
							<!-- <dt>Room(s)</dt>
							<dd>1 night, 1 room, max. 2 people. </dd> -->
						</dl>
						<div class="price">
							<p class="total">Total Price:  $ <?php echo $tt;?></p>
							<!-- <p>VAT (20%) included</p> -->
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
	<script type="text/javascript">
		function printpage()
			{window.print()}
	</script>
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles <a href="booking-step3.html#"><img class="s-s-icon" src="images/settings.png" alt="Style switcher" /></a></h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="booking-step3.html#" class="yellow" title="yellow"></a></li>
				<li><a href="booking-step3.html#" class="orange" title="orange"></a></li>
				<li><a href="booking-step3.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="booking-step3.html#" class="pink" title="pink"></a></li>
				<li><a href="booking-step3.html#" class="purple" title="purple"></a></li>
				<li><a href="booking-step3.html#" class="blue" title="blue"></a></li>
				<li><a href="booking-step3.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="booking-step3.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
	<script src="js/styler.js"></script>
</body>
</html>