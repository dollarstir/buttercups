<?php include 'core.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Butter cups - Online Booking ">
	<meta name="description" content="Buttercups - Online Booking">
	<meta name="author" content="favorchapel.com">
	
	<title>Buttercups Tour - Locations</title>
	
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
	
	<!--//search-->
	
	<!--main-->
	<main class="main">
		<div class="wrap">
			<div class="row">
				<div class="full-width">
				
					<!--latest offers-->
					<header class="s-title">
						<h2>Locations in Ghana</h2>
					</header>
					
					<div class="offers">
						<div class="row">
							<!--column-->
							<?php Location();?>
							
							<!--//column-->
						</div>
					</div>
					<!--//latest offers-->
					
					<!-- <header class="s-title">
						<h2>Top destinations around the world</h2>
					</header> -->
					
					<!--top destinations-->
					
					<!--//top destinations-->
			
			
					<!--info boxes-->
					
				</div>
					<!--//info boxes-->
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
		<h2>Template Styles </h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="index.html#" class="yellow" title="yellow"></a></li>
				<li><a href="index.html#" class="orange" title="orange"></a></li>
				<li><a href="index.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="index.html#" class="pink" title="pink"></a></li>
				<li><a href="index.html#" class="purple" title="purple"></a></li>
				<li><a href="index.html#" class="blue" title="blue"></a></li>
				<li><a href="index.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="index.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
	<script src="js/styler.js"></script>
</body>
</html>