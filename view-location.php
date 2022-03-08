<?php include 'core.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Book Your Travel - Online Booking HTML Template">
	<meta name="description" content="Book Your Travel - Online Booking HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Book Your Travel - Hotel</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/theme-turqoise.css" id="template-color" />
	<link rel="stylesheet" href="css/lightslider.min.css" />
	<link rel="stylesheet" href="css/lightgallery.min.css" />
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
			
			<!--//breadcrumbs-->

			<?php
			
				 include 'admin/db.php';

				 $gid = $_GET['mid'];
				 $gg = mysqli_query($conn,"SELECT * FROM location WHERE id= '$gid'");
				 $rr= mysqli_fetch_array($gg);
			?>

			
			<div class="row">
				<!--hotel three-fourth content-->
				<section class="three-fourth">
					<!--gallery-->
					<div class="gallery">
						<ul id="image-gallery" class="cS-hidden">
							<li data-thumb="upload/<?php echo $rr['pic'];?>"> 
								<img src="upload/<?php echo $rr['pic'];?>" alt="" />
							</li>
							<?php

							include 'admin/db.php';
							$ref = $rr['ref'];

							$all= mysqli_query($conn,"SELECT * FROM locpics WHERE ref='$ref'");

							while ($l=mysqli_fetch_array($all)) {
								echo '<li data-thumb="upload/'.$l['pic'].'"> 
								<img src="upload/'.$l['pic'].'" alt="" />
							</li>';
								# code...
							}
							?>
							
						</ul>
					</div>
					<!--//gallery-->
				
					<!--inner navigation-->
					<!-- <nav class="inner-nav">
						<ul>
							<li class="availability"><a href="hotel.html#availability" title="Availability">Availability</a></li>
							<li class="description"><a href="hotel.html#description" title="Description">Description</a></li>
							<li class="facilities"><a href="hotel.html#facilities" title="Facilities">Facilities</a></li>
							<li class="location"><a href="hotel.html#location" title="Location">Location</a></li>
							<li class="reviews"><a href="hotel.html#reviews" title="Reviews">Reviews</a></li>
							<li class="things-to-do"><a href="hotel.html#things-to-do" title="Things to do">Things to do</a></li>
						</ul>
					</nav> -->
					<!--//inner navigation-->
					
					<!--availability-->
					
					<!--//availability-->
					
					<!--description-->
				
					<!--//description-->
					
					<!--facilities-->
					
					<!--//facilities-->
					
					<!--location-->
					
					<!--//location-->
					
					<!--reviews-->
					
					<!--//reviews-->
					
					<!--things to do-->
					
					<!--//things to do-->
				</section>
				<!--//hotel content-->
				
                <!--sidebar-->
                <?php 

                    include 'admin/db.php';
                    $id = $_GET['mid'];

                    $sel = mysqli_query($conn,"SELECT * FROM location WHERE id='$id' ");
                    $row = mysqli_fetch_array($sel);

                ?>
				<aside class="one-fourth right-sidebar">
					<!--hotel details-->
					<article class="hotel-details">
						<h1><?php echo $row['title'];?>
							<span class="stars">
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
							</span>
						</h1>
						<!-- <span class="address">Marylebone, London</span>
						<span class="rating"> 8 /10</span> -->
						<!-- <div class="description">
							<p>The Best Ipsum hotel  features over 1,000 luxuriously appointed, individually styled rooms, suites and apartments, each containing unique works of art. </p>
						</div> -->
						<!-- <div class="tags">
							<ul>
								<li><a href="hotel.html#" title="Wellness">Wellness</a></li>
								<li><a href="hotel.html#" title="Last minute">Last minute</a></li>
								<li><a href="hotel.html#" title="Thailand">Thailand</a></li>
								<li><a href="hotel.html#" title="SPA">SPA</a></li>
								<li><a href="hotel.html#" title="Romantic">Romantic</a></li>
							</ul>
						</div> -->
					</article>
					<!--//hotel details-->
					
					<!--testimonials-->
					<!-- <article class="testimonials">
						<blockquote>Loved the staff and the location was just amazing... Perfect!” </blockquote>
						<span class="name">- Jane Doe, Solo Traveller</span>
					</article> -->
					<!--//testimonials-->
					
					<!--Need Help Booking?-->
					<article class="widget">
						<h4>Need Help Booking?</h4>
						<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your holiday needs.</p>
						<p class="number">+233(0)244044013</p>
					</article>
					<!--//Need Help Booking?-->
					
					<!--Why Book with us?-->
					<article class="widget">
						<h4>Why Book with us?</h4>
						<h5>Low rates</h5>
						<p>Get the best rates, or get a refund.No booking fees. Save money!</p>
						
						<h5>We’re Always Here</h5>
						<p>Call or email us, anytimeGet 24-hour support before, during, and after your trip</p>
					</article>
					<!--//Why Book with us?-->
					
					<!--Popular hotels in the area-->
					<article class="widget">
						<h4>Other Destinations</h4>
						<ul class="popular-hotels small-list">
							<?php Popularloc($id);?>
							
						</ul>
						<a href="locations.php" title="Show all" class="show-all">Show all</a>
					</article>
					<!--//Popular hotels in the area-->
					
					<!--Deal of the day-->
					<!-- <article class="widget">
						<h4>Deal of the day</h4>
						<div class="deal-of-the-day">
							<figure><a href="hotel.html"><img src="images/uploads/hotel2.jpg" alt=""  /></a></figure>
							<h3><a href="hotel.html">Plaza Resort Hotel &amp; SPA
								<span class="stars">
									<i class="material-icons">&#xE838;</i>
									<i class="material-icons">&#xE838;</i>
									<i class="material-icons">&#xE838;</i>
									<i class="material-icons">&#xE838;</i>
								</span>
							</a></h3>
							<p>From <span class="price">$ 100 <small>/ per night</small></span></p>
							<span class="rating"> 8 /10</span>
						</div>
					</article> -->
					<!--//Deal of the day-->
				</aside>
				<!--//sidebar-->
			</div>
			<!--//row-->
		</div>
	</main>
	<!--//main-->
	
	<!--footer-->
	<?php ft();?>
	<!---footer-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
	<script type="text/javascript"  src="js/infobox.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimmenu.min.js"></script>
	<script type="text/javascript" src="js/lightslider.min.js"></script>
	<script type="text/javascript" src="js/lightgallery-all.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">
	function initialize() {
		var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(49.47216, -123.76307),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>Best ipsum hotel</strong>1400 PennsylSUVia Ave,Washington DCwww.bestipsumhotel.com";

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
	
	<script type="text/javascript">
    	 $(document).ready(function() {
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:6,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
			
			$('#gallery1,#gallery2,#gallery3,#gallery4').lightGallery({
				download:false
			});
		});
    </script>
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles </h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="hotel.html#" class="yellow" title="yellow"></a></li>
				<li><a href="hotel.html#" class="orange" title="orange"></a></li>
				<li><a href="hotel.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="hotel.html#" class="pink" title="pink"></a></li>
				<li><a href="hotel.html#" class="purple" title="purple"></a></li>
				<li><a href="hotel.html#" class="blue" title="blue"></a></li>
				<li><a href="hotel.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="hotel.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
	<script src="js/styler.js"></script>
	</body>
</html>