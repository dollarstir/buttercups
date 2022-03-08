<?php include 'core.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Butter cups - Online Booking ">
	<meta name="description" content="Buttercups - Online Booking">
	<meta name="author" content="favorchapel.com">
	
	<title>Buttercups Tour - Booking</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/theme-turqoise.css" id="template-color" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800%7CRoboto+Slab:400,700&subset=latin,latin-ext,greek-ext,greek,cyrillic,vietnamese,cyrillic-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/styler.css" type="text/css" />
	
	
	
	
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
			

			<?php

					include 'admin/db.php';
					$id= $_GET['actid'];
					$at= $_GET['type'];
					if($at =="activities"){

						$sl= mysqli_query($conn,"SELECT * FROM activities WHERE id='$id'");
						$ract = mysqli_fetch_array($sl);

					}
					elseif($at == "accomodation"){

						$sl= mysqli_query($conn,"SELECT * FROM acomo WHERE id='$id'");
						$ract = mysqli_fetch_array($sl);




					}

					elseif($at == "Tour-Service"){

						$sl= mysqli_query($conn,"SELECT * FROM tour WHERE id='$id'");
						$ract = mysqli_fetch_array($sl);




					}

				?>
			<div class="row">
				<!--three-fourth content-->
				<div class="three-fourth">
					<form id="booking" method="post" action="ba2.php" class="static-content booking">
						<fieldset>
							<h2><span>01 </span>Traveller info</h2>


							<!-- <div class="row">
								<div class="f-item one-half">
									<label for="mpic">Passport size picture</label>
									<input type="file" id="mpic" name="image"  onchange="readURL();"/>
								</div>
								<div class="f-item one-half">
									<img src="images/avat.png" style="width:200px;height:200px;" id="pm" />
								</div>
							</div> -->


							<div class="row">	
								<div class="f-item one-half">
									<label for="first_name">First name</label>
									<input type="text" id="first_name" name="fname" />

									<input type="hidden" id="first_name" name="price"  value="<?php echo $ract['price'];?>"/>
									<input type="hidden" id="first_name" name="title"  value="<?php echo $ract['title'];?>"/>
									<input type="hidden" id="first_name" name="type"  value="<?php echo $_GET['type'];?>"/>
								</div>
								<div class="f-item one-half">
									<label for="last_name">Last name</label>
									<input type="text" id="last_name" name="lname" />
								</div>
							</div>
							
							<div class="row">
								<div class="f-item one-half">
									<label for="email">Email address</label>
									<input type="email" id="email" name="email" />
								</div>
								<div class="f-item one-half">
									<label for="confirm_email">Confirm email address</label>
									<input type="text" id="confirm_email" name="cmail" />
								</div>
								<span class="info">You’ll receive a confirmation email</span>
							</div>
							
							<div class="row">
								<div class="f-item one-half">


								<label for="country1">Country</label>
								<select name="country" id="country1" class="text_field" ></select>
									
								</div>
								<div class="f-item one-half">
									<label for="state">Town / City</label>
									<select name="state" id="state" class="text_field" ></select>
								</div>
							</div>
							
							<div class="row">
								<div class="f-item one-half">
									<label for="zip">ZIP Code</label>
									<input type="text" id="zip" name="zip" />
								</div>

								
								<div class="f-item one-half">
								<label for="address">Street Address </label>
									<input type="text" id="address" name="address" />
								</div>
							</div>



							 <div class="row">
								<div class="f-item one-half">
									<label for="zip">Arrival Date</label>
									<input type="date" id="zip" name="arrival" />
								</div>
								<div class="f-item one-half">
									<label for="countr">Departure Date</label>
									<input type="date" id="countr" name="departure" />
								</div>
							</div>


							<div class="row">
								<div class="f-item one-half">
									<label for="zip">Arrival time</label>
									<input type="time" id="zip" name="arrivaltime" />
								</div>
								<div class="f-item one-half">
									<label for="count">Departure time</label>
									<input type="time" id="count" name="departuretime" />
								</div>
							</div>

							<div class="row">
								

								<div class="f-item one-half">
									<label for="zip">Phone Number with Country code</label>
									<input type="text" id="zip" name="contact" />
								</div>

								<div class="f-item one-half">
									<label for="zip">number of days </label>
									<input type="number" id="zip" name="days" />
								</div>
								
							</div>
							
							<div class="row">
								<div class="f-item full-width">
									<label>Special requirements: <span>(Not Guaranteed)</span></label>
									<textarea rows="10" cols="10" name="sp"></textarea>
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
						<h1><?php echo $ract['title'];?> 
							<span class="stars">
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
							</span>
						</h1>
						<!-- <span class="address">Marylebone, London</span>
						<span class="rating"> 8 /10</span> -->
						<dl class="booking-info">
							<dt>Price per Day </dt>
							<dd>$ <?php echo $ract['price'];?></dd>
							<dt>Item in cart</dt>
							<dd><?php echo strtoupper($_GET['type']).' ('.$ract['title'].')';?></dd> 
							
						</dl>
						
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

	<script>

function readURL() {
            var mp = document.getElementById('mpic');
            if (mp.files && mp.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pm')
                        .attr('src', e.target.result)
                        
                };

                reader.readAsDataURL(mp.files[0]);
            }
    }



    function readscreenshot() {
            var mp = document.getElementById('dp');
            if (mp.files && mp.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#cm')
                        .attr('src', e.target.result)
                        
                };

                reader.readAsDataURL(mp.files[0]);
            }
    }
    </script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimmenu.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

	<!-- Countries JS -->

	<script type= "text/javascript" src = "countries.js"></script>
	<script language="javascript">
	// populateCountries("country"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country1","state");
	// populateCountries("country2");
</script>
	
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles </h2>
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