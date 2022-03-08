<?php include 'core.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Butter cups - Online Booking ">
	<meta name="description" content="Buttercups - Online Booking">
	<meta name="author" content="favorchapel.com">
	
	<title>Buttercups Tours- Contact</title>
	
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
<body onload="initialize()">
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
			<!-- <nav class="breadcrumbs">
				
				<ul>
					<li><a href="index.php" title="Home">Home</a></li> 
					<li>Contact</li>                                       
				</ul>
				
			</nav> -->
			<!--//breadcrumbs-->
			
			<div class="row">
				<!--three-fourth content-->
				<div class="three-fourth">
					<h1>Contact us</h1>
					<!--map-->
					<div class="map-wrap">
						<div class="gmap" id="map_canvas"></div>
					</div>
					<!--//map-->
				</div>	
				<!--three-fourth content-->
				
				<!--sidebar-->
				<aside class="one-fourth right-sidebar lower">
					<!--contact form-->
					<article class="widget">
						<h4>Send us a message</h4>
						<form method="post" action="contact_form_message.php" name="contactform" id="contactform">
							<fieldset>
								<div id="message"></div>
								<div class="row">
									<div class="f-item full-width">
										<label for="name">Your name</label>
										<input type="text" id="name" name="name" value="" />
									</div>
									<div class="f-item full-width">
										<label for="email">Your e-mail</label>
										<input type="email" id="email" name="email" value="" />
									</div>
									<div class="f-item full-width">
										<label for="comments">Your message</label>
										<textarea id="comments" rows="10" cols="10"></textarea>
									</div>
									<div class="f-item full-width">
										<input type="submit" value="Send" id="submit" name="submit" class="gradient-button" />
									</div>
								</div>
							</fieldset>
						</form>
					</article>
					<!--//contact form-->
					
					<!--contact info-->
					<article class="widget">
						<h4>Or contact us directly</h4>
						<p class="number">+233(0)244044013</p>
						<p class="email"><a href="contact.html#">buttercupstours@outlook.com</a></p>
					</article>
					<!--//contact info-->
				</aside>
				<!--//sidebar-->
			</div>
			<!--//main content-->
		</div>
	</main>
	<!--//main-->
	
	<!--footer-->
	<?php  ft();?>
	<!---footer-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
	<script type="text/javascript"  src="js/infobox.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimmenu.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
	<script type="text/javascript">
	function initialize() {
		var secheltLoc = new google.maps.LatLng(6.677215, -1.630138);

		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(6.677215, -1.630138),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>Buttercup Tours</strong><br>27 Lesley Opoku Ware Drive,<br>Ridge Nhyiaeso";

		var myOptions = {
			 content: boxText
			,disableAutoPan: false
			,maxWidth: 0
			,pixelOffset: new google.maps.Size(-140, 0)
			,zIndex: null
			,closeBoxURL: ""
			,infoBoxClearance: new google.maps.Size(1, 1)
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
		};

		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});

		var ib = new InfoBox(myOptions);
		ib.open(theMap, marker);
	}
	</script>
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles </h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="contact.html#" class="yellow" title="yellow"></a></li>
				<li><a href="contact.html#" class="orange" title="orange"></a></li>
				<li><a href="contact.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="contact.html#" class="pink" title="pink"></a></li>
				<li><a href="contact.html#" class="purple" title="purple"></a></li>
				<li><a href="contact.html#" class="blue" title="blue"></a></li>
				<li><a href="contact.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="contact.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
	<script src="js/styler.js"></script>
</body>
</html>