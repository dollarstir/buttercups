<?php include 'core.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Butter cups - Online Booking ">
	<meta name="description" content="Buttercups - Online Booking">
	<meta name="author" content="favorchapel.com">
	
	<title>Buttercups - Tour Services</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/theme-turqoise.css" id="template-color" />
	<link rel="stylesheet" href="css/lightslider.min.css" />
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
	
	<!--slider-->
	<div class="slider">
		<ul id="hero-gallery" class="cS-hidden">
			<li data-thumb="images/uploads/slider7.jpg"> 
				<img src="images/uploads/slider7.jpg" alt="" />
			</li>
			<li data-thumb="images/uploads/slider3.jpg"> 
				<img src="images/uploads/slider3.jpg" alt="" />
			</li>
			<li data-thumb="images/uploads/slider2.jpg"> 
				<img src="images/uploads/slider2.jpg" alt="" />
			</li>	
		</ul>
	</div>
	<!--//slider-->
	
	<!--search-->
	<div class="main-search">
		<div class="wrap">
			<form id="main-search" method="post" action="search_results.html">
				<div class="row">
					<!--column-->
					<div class="column radios one-fourth">
						<h5><span>01</span> What?</h5>
						<div class="row">
							<div class="f-item one-half">
								<input type="radio" name="radio" id="hotel" value="form1" />
								<label for="hotel">Hotel</label>
							</div>
							<div class="f-item one-half">
								<input type="radio" name="radio" id="self_catering" value="form2" />
								<label for="self_catering">Self Catering</label>
							</div>
							<div class="f-item one-half">
								<input type="radio" name="radio" id="flight" value="form3" />
								<label for="flight">Flight</label>
							</div>
							<div class="f-item one-half">
								<input type="radio" name="radio" id="cruise" value="form4" />
								<label for="cruise">Cruise</label>
							</div>
							<div class="f-item one-half">
								<input type="radio" name="radio" id="flight_and_hotel" value="form5" />
								<label for="flight_and_hotel">Flight &amp; Hotel</label>	
							</div>
							<div class="f-item one-half">
								<input type="radio" name="radio" id="rent_a_car" value="form6" />
								<label for="rent_a_car">Rent a Car</label>
							</div>
						</div>
					</div>
					<!--//column-->
					
					<div class="three-fourth">
						<!--form hotel-->
						<div class="form row" id="form1">
							<!--column-->
							<div class="column one-third">
								<h5><span>02</span> Where?</h5>
								<div class="row">
									<div class="f-item full-width">
										<label for="destination1">Your destination</label>
										<input type="text" placeholder="City, region, district or specific hotel" id="destination1" name="destination" />
									</div>
								</div>
							</div>
							<!--//column-->
							
							<!--column-->
							<div class="column  one-third">
								<h5><span>03</span> When?</h5>
								<div class="row">
									<div class="f-item one-half datepicker">
										<label for="datepicker1">Check-in date</label>
										<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker1" name="datepicker1" /></div>
									</div>
									<div class="f-item one-half datepicker">
										<label for="datepicker2">Check-out date</label>
										<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker2" name="datepicker2" /></div>
									</div>
								</div>
							</div>
							<!--//column-->
						
							<!--column-->
							<div class="column one-third">
								<h5><span>04</span> Who?</h5>
								<div class="row">
									<div class="f-item one-third spinner">
										<label for="spinner1">Rooms</label>
										<input type="text" placeholder="" id="spinner1" name="spinner1" />
									</div>
									<div class="f-item one-third spinner">
										<label for="spinner2">Adults</label>
										<input type="text" placeholder="" id="spinner2" name="spinner1" />
									</div>
									<div class="f-item one-third spinner">
										<label for="spinner3">Children</label>
										<input type="text" placeholder="" id="spinner3" name="spinner1" />
									</div>
								</div>
							</div>
							<!--//column-->
						</div>	
						<!--//form hotel-->

						<!--form self catering-->
						<div class="form row" id="form2">
							<!--column-->
							<div class="column one-third">
								<h5><span>02</span> Where?</h5>
								<div class="row">
									<div class="f-item full-width">
										<label for="destination2">Your destination</label>
										<input type="text" placeholder="City, region, district or specific hotel" id="destination2" name="destination" />
									</div>
								</div>
							</div>
							<!--//column-->
							
							<!--column-->
							<div class="column one-third">
								<h5><span>03</span> When?</h5>
								<div class="row">
									<div class="f-item one-half datepicker">
										<label for="datepicker1">Check-in date</label>
										<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker4" name="datepicker4" /></div>
									</div>
									<div class="f-item one-half datepicker">
										<label for="datepicker2">Check-out date</label>
										<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker5" name="datepicker5" /></div>
									</div>
								</div>
							</div>
							<!--//column-->
						
							<!--column-->
							<div class="column  one-third">
								<h5><span>04</span> Who?</h5>
								<div class="row">
									<div class="f-item one-half espinner">
										<label for="spinner1">Guests</label>
										<input type="text" placeholder="" id="spinner4" name="spinner4" />
									</div>
									<div class="f-item one-half spinner">
										<label for="spinner2">Bedrooms</label>
										<input type="text" placeholder="" id="spinner5" name="spinner5" />
									</div>
								</div>
							</div>
							<!--//column-->
						</div>	
						<!--//form self catering-->
						
						<!--form flight-->
						<div class="form row" id="form3">
							<!--column-->
							<div class="column one-third">
								<h5><span>02</span> Where?</h5>
								<div class="row">
									<div class="f-item full-width">
										<label for="destination3">Leaving from</label>
										<input type="text" placeholder="City, region, district or specific airport" id="destination3" name="destination" />
									</div>
									<div class="f-item full-width">
										<label for="destination4">Going to</label>
										<input type="text" placeholder="City, region, district or specific airport" id="destination4" name="destination" />
									</div>
								</div>
							</div>
							<!--//column-->
							
							<!--column-->
							<div class="column one-third">
								<h5><span>03</span> When?</h5>
								<div class="row">
									<div class="f-item full-width datepicker">
										<label for="datepicker6">Departing on</label>
										<div class="row">
											<div class="f-item one-half">
												<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker6" name="datepicker6" /></div>
											</div>
											<div class="f-item one-half">
												<select>
													<option>Select time</option>
													<option>Lowest fare</option>
													<option>Morning</option>
													<option>Midday</option>
													<option>Afternoon</option>
													<option>Evening</option>
												</select>
											</div>
										</div>
									</div>
									<div class="f-item full-width datepicker">
										<label for="datepicker7">Arriving on</label>
										<div class="row">
											<div class="f-item one-half">
												<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker7" name="datepicker7" /></div>
											</div>
											<div class="f-item one-half">
												<select>
													<option>Select time</option>
													<option>Lowest fare</option>
													<option>Morning</option>
													<option>Midday</option>
													<option>Afternoon</option>
													<option>Evening</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--//column-->
						
							<!--column-->
							<div class="column one-third">
								<h5><span>04</span> Who?</h5>
								<div class="row">
									<div class="f-item one-third spinner">
										<label for="spinner6">Adults</label>
										<input type="text" placeholder="" id="spinner6" name="spinner6" />
									</div>
									<div class="f-item one-third spinner">
										<label for="spinner7">Children</label>
										<input type="text" placeholder="" id="spinner7" name="spinner7" />
									</div>
									<div class="f-item one-third spinner">
										<label for="spinner8">Infants</label>
										<input type="text" placeholder="" id="spinner8" name="spinner8" />
									</div>
								</div>
							</div>
							<!--//column-->
						</div>	
						<!--//form flight-->
						
						<!--form cruise-->
						<div class="form row" id="form4">
							<!--column-->
							<div class="column  one-third">
								<h5><span>02</span> Where?</h5>
								<div class="row">
									<div class="f-item full-width">
										<label>Your destination</label>
										<select>
											<option>I Don't Mind</option>
											<option>Africa</option>
											<option>Alaska</option>
											<option>Alaska - Gulf Northbound</option>
											<option>Alaska - Gulf Southbound</option>
											<option>Antarctica</option>
											<option>Arctic</option>
											<option>Australia</option>
											<option>Bahamas</option>
											<option>Bermuda</option>
											<option>Brazil</option>
											<option>Canada/New England</option>
											<option>Canada</option>
											<option>Caribbean</option>
											<option>Caribbean - Eastern</option>
											<option>Caribbean - Southern</option>
											<option>Caribbean - Western</option>
											<option>Coastal</option>
											<option>Costa Rica</option>
											<option>Cruise To Nowhere</option>
											<option>Europe</option>
											<option>Northern Europe</option>
											<option>Europe - Western</option>
											<option>Europe (Greenland)</option>
											<option>Europe (Norway)</option>
											<option>Far East</option>
											<option>Greece</option>
											<option>Hawaii</option>
											<option>India</option>
											<option>Mediterranean</option>
											<option>Mediterranean - Eastern</option>
											<option>Mexico</option>
											<option>Middle East</option>
											<option>New England</option>
											<option>New Zealand</option>
											<option>Pacific Coastal</option>
											<option>Pacific Northwest</option>
											<option>Panama Canal</option>
											<option>Russia</option>
											<option>South America</option>
											<option>South Pacific</option>
											<option>Southeast Asia</option>
											<option>Tahiti</option>
											<option>Transatlantic</option>
											<option>Transcanal</option>
											<option>Transpacific</option>
											<option>World Cruise</option>
										</select>
									</div>
								</div>
							</div>
							<!--//column-->
							
							<!--column-->
							<div class="column one-third">
								<h5><span>03</span> When?</h5>
								<div class="row">
									<div class="f-item one-half datepicker">
										<label for="datepicker8">Departure date</label>
										<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker8" name="datepicker8" /></div>
									</div>
									<div class="f-item one-half">
										<label>Cruise length</label>
										<select>
											<option>I Don't Mind</option>
											<option>1-2 Nights</option>
											<option>3-6 Nights</option>
											<option>7-9 Nights</option>
											<option>10-14 Nights</option>
											<option>Over 14 Nights</option>
										</select>
									</div>
								</div>
							</div>
							<!--//column-->
						
							<!--column-->
							<div class="column one-third">
								<h5><span>04</span> Who?</h5>
								<div class="row">
									<div class="f-item one-half">
										<label>Cruise Line</label>
										<select>
											<option>I Don't Mind</option>
											<option>Azamara Club Cruises</option>
											<option>Carnival Cruise Lines</option>
											<option>Celebrity Cruises</option>
											<option>Costa Cruise Lines</option>
											<option>Cruise &amp; Maritime Voyages</option>
											<option>Crystal Cruises</option>
											<option>Cunard Line Ltd.</option>
											<option>Disney Cruise Line</option>
											<option>Holland America Line</option>
											<option>Hurtigruten Cruise Line</option>
											<option>MSC Cruises</option>
											<option>Norwegian Cruise Line</option>
											<option>Oceania Cruises</option>
											<option>Orion Expedition Cruises</option>
											<option>P&amp;O Cruises</option>
											<option>Paul Gauguin Cruises</option>
											<option>Peter Deilmann Cruises</option>
											<option>Princess Cruises</option>
											<option>Regent Seven Seas Cruises</option>
											<option>Royal Caribbean International</option>
											<option>Seabourn Cruise Line</option>
											<option>Silversea Cruises</option>
											<option>Star Clippers</option>
											<option>Swan Hellenic Cruises</option>
											<option>Thomson Cruises</option>
											<option>Viking River Cruises</option>
											<option>Windstar Cruises</option>
										</select>
									</div>
									
									<div class="f-item one-half spinner">
										<label for="spinner9">Cabins</label>
										<input type="text" placeholder="" id="spinner9" name="spinner9" />
									</div>
								</div>
							</div>
							<!--//column-->
						</div>	
						<!--//form cruise-->
						
						<!--form flight+hotel-->
						<div class="form row" id="form5">
							<!--column-->
							<div class="column one-third">
								<h5><span>02</span> Where?</h5>
								<div class="row">
									<div class="f-item full-width">
										<label for="destination5">Leaving from</label>
										<input type="text" placeholder="City, region, district or specific airport" id="destination5" name="destination" />
									</div>
									<div class="f-item full-width">
										<label for="destination6">Going to</label>
										<input type="text" placeholder="City, region, district or specific airport" id="destination6" name="destination" />
									</div>
								</div>
							</div>
							<!--//column-->
							
							<!--column-->
							<div class="column one-third">
								<h5><span>03</span> When?</h5>
								<div class="row">
									<div class="f-item full-width datepicker">
										<label for="datepicker9">Departing on</label>
										<div class="row">
											<div class="f-item one-half">
												<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker9" name="datepicker9" /></div>
											</div>
											<div class="f-item one-half">
												<select>
													<option>Select time</option>
													<option>Lowest fare</option>
													<option>Morning</option>
													<option>Midday</option>
													<option>Afternoon</option>
													<option>Evening</option>
												</select>
											</div>
										</div>
									</div>
									<div class="f-item full-width datepicker">
										<label for="datepicker10">Arriving on</label>
										<div class="row">
											<div class="f-item one-half">
												<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker10" name="datepicker10" /></div>
											</div>
											<div class="f-item one-half">
												<select>
													<option>Select time</option>
													<option>Lowest fare</option>
													<option>Morning</option>
													<option>Midday</option>
													<option>Afternoon</option>
													<option>Evening</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--//column-->
						
							<!--column-->
							<div class="column one-third">
								<h5><span>04</span> Who?</h5>
								<div class="row">
									<div class="f-item one-third spinner">
										<label for="spinner10">Adults</label>
										<input type="text" placeholder="" id="spinner10" name="spinner10" />
									</div>
									<div class="f-item one-third spinner">
										<label for="spinner11">Children</label>
										<input type="text" placeholder="" id="spinner11" name="spinner11" />
									</div>
									<div class="f-item one-third spinner">
										<label for="spinner12">Rooms</label>
										<input type="text" placeholder="" id="spinner12" name="spinner12" />
									</div>
								</div>
							</div>
							<!--//column-->
						</div>	
						<!--//form flight+hotel-->
						
						<!--form rent a car-->
						<div class="form row" id="form6">
							<!--column-->
							<div class="column one-third">
								<h5><span>02</span> Where?</h5>
								<div class="row">
									<div class="f-item full-width">
										<label for="destination7">Pick Up</label>
										<input type="text" placeholder="I want to pick up car in" id="destination7" name="destination" />
									</div>
									<div class="f-item full-width">
										<label for="destination8">Drop Off</label>
										<input type="text" placeholder="I want to pick drop off car in" id="destination8" name="destination" />
									</div>
								</div>
							</div>
							<!--//column-->
							
							<!--column-->
							<div class="column one-third">
								<h5><span>03</span> When?</h5>
								<div class="row">
									<div class="f-item full-width datepicker">
										<label for="datepicker11">Pick up time</label>
										<div class="row">
											<div class="f-item one-half">
												<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker11" name="datepicker11" /></div>
											</div>
											<div class="f-item one-half">
												<select>
													<option>00:00</option>
													<option>01:00</option>
													<option>02:00</option>
													<option>03:00</option>
													<option>04:00</option>
													<option>05:00</option>
													<option>06:00</option>
													<option>07:00</option>
													<option>08:00</option>
													<option>09:00</option>
													<option selected>10:00</option>
													<option>11:00</option>
													<option>12:00</option>
													<option>13:00</option>
													<option>14:00</option>
													<option>15:00</option>
													<option>16:00</option>
													<option>17:00</option>
													<option>18:00</option>
													<option>19:00</option>
													<option>20:00</option>
													<option>21:00</option>
													<option>22:00</option>
													<option>23:00</option>
												</select>
											</div>
										</div>
									</div>
									<div class="f-item full-width datepicker">
										<label for="datepicker12">Drop of time</label>
										<div class="row">
											<div class="f-item one-half">
												<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker12" name="datepicker12" /></div>
											</div>
											<div class="f-item one-half">
												<select>
													<option>00:00</option>
													<option>01:00</option>
													<option>02:00</option>
													<option>03:00</option>
													<option>04:00</option>
													<option>05:00</option>
													<option>06:00</option>
													<option>07:00</option>
													<option>08:00</option>
													<option>09:00</option>
													<option selected>10:00</option>
													<option>11:00</option>
													<option>12:00</option>
													<option>13:00</option>
													<option>14:00</option>
													<option>15:00</option>
													<option>16:00</option>
													<option>17:00</option>
													<option>18:00</option>
													<option>19:00</option>
													<option>20:00</option>
													<option>21:00</option>
													<option>22:00</option>
													<option>23:00</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--//column-->
						
							<!--column-->
							<div class="column one-third">
								<h5><span>04</span> Who?</h5>
								<div class="row">
									<div class="f-item one-half spinner small">
										<label for="spinner13">Driver Age</label>
										<input type="text" placeholder="" id="spinner13" name="spinner13" />
									</div>
									<div class="f-item one-half">
										<label for="spinner2">Car type:</label>
										<select>
											<option>No Preference</option>
											<option>Economy</option>
											<option>Compact</option>
											<option>Midsize</option>
											<option>Standard</option>
											<option>Full Size</option>
											<option>Premium</option>
											<option>Luxury</option>
											<option>Convertible</option>
											<option>MiniSUV</option>
											<option>Sports Car</option>
										</select>
									</div>
								</div>
							</div>
							<!--//column-->
						</div>	
						<!--//form rent a car-->
					</div>
					<input type="submit" value="Proceed to results" class="gradient-button search-submit" id="search-submit" />
				</div>
			</form>
		</div>
	</div>
	<!--//search-->
	
	<!--main-->
	<main class="main">		
		<div class="wrap">
			<div class="row">
		
				<div class="full-width">
					<header class="s-title">
						<h2>Tour Services</h2>
					</header>
					
					<div class="deals">
						<div class="row">
							<!--deal-->
							<article class="one-half">
								<figure><a href="hotel.html" title=""><img src="images/uploads/hotel1.jpg" alt="" /></a></figure>
								<div class="details">
									<h3>Luxury 
										<span class="stars">
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
										</span>
									</h3>
									<!-- <span class="address">London  •  <a href="hotels_2col.html#">Show on map</a></span> 
									<span class="rating"> 8 /10</span>-->
									<span class="price">Price<em>$ 50</em> </span>
									<div class="description">
										<p> <ul>
                                            <li>
                                                20 Sites 
                                            </li>
                                            <li>Feeding</li>
                                            <li>Digital Photos</li>
                                        </ul>
                                            
                                        <!-- <a href="hotel.html">More info</a> -->
                                    </p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							<article class="one-half">
								<figure><a href="hotel.html" title=""><img src="images/uploads/hotel2.jpg" alt="" /></a></figure>
								<div class="details">
									<h3>Semi Luxury
										<span class="stars">
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
											<i class="material-icons">&#xE838;</i>
										</span>
									</h3>
									<!-- <span class="address">London  •  <a href="hotels_2col.html#">Show on map</a></span>
									<span class="rating"> 9 /10</span> -->
									<span class="price">Price <em>$ 80</em> </span>
									<div class="description">
										<p>
                                            <ul>
                                                <li>10 Sites</li>
                                                <li>Digital Photos</li>
                                            </ul>
                                            <!-- <a href="hotel.html">More info</a> -->
                                        </p>
									</div>
									<a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
								</div>
							</article>
							<!--//deal-->
							
							<!--deal-->
							
							<!--//deal-->
						</div>
					</div>
					<!--//deals-->
					
					<!-- <header class="s-title">
						<h2>Top destinations around the world</h2>
					</header> -->
					
					<!--top destinations-->
					
					<!--//top destinations-->
				</div>
			</div>
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
	<script type="text/javascript" src="js/lightslider.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">	
		(function( $ ) {
			$(document).ready(function(){
				$('.form').hide();
				$('#form1').show();
				$('.f-item:nth-child(1)').addClass('active');
				$('.f-item:nth-child(1) span').addClass('checked');		

				$('#hero-gallery').lightSlider({
					gallery:true,
					item:1,
					pager:false,
					gallery:false,
					slideMargin: 0,
					speed:2000,
					pause:6000,
					mode: 'fade',
					auto:true,
					loop:true,
					onSliderLoad: function() {
						$('#hero-gallery').removeClass('cS-hidden');
					}  
				});			
			});
		})(jQuery);
	</script>
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles <a href="hotels_2col.html#"><img class="s-s-icon" src="images/settings.png" alt="Style switcher" /></a></h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="hotels_2col.html#" class="yellow" title="yellow"></a></li>
				<li><a href="hotels_2col.html#" class="orange" title="orange"></a></li>
				<li><a href="hotels_2col.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="hotels_2col.html#" class="pink" title="pink"></a></li>
				<li><a href="hotels_2col.html#" class="purple" title="purple"></a></li>
				<li><a href="hotels_2col.html#" class="blue" title="blue"></a></li>
				<li><a href="hotels_2col.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="hotels_2col.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
	<script src="js/styler.js"></script>
</body>
</html>