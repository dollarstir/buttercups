<?php
include 'core.php';

include 'admin/db.php';


extract($_POST);
if(empty($fname) || empty($lname) || empty($state) ){
  echo'  <script>

  alert("please fill all empty files")
    </script>';
}

$tt = $days  * $price;
// echo $tt;

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Butter cups - Online Booking ">
	<meta name="description" content="Buttercups - Online Booking">
	<meta name="author" content="favorchapel.com">
	
	<title>Buttercups Tour - Payment</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/theme-turqoise.css" id="template-color" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800%7CRoboto+Slab:400,700&subset=latin,latin-ext,greek-ext,greek,cyrillic,vietnamese,cyrillic-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/styler.css" type="text/css" />
    
    <link rel="stylesheet" href="sweetalert.css">
	
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
					<form id="paymentForm"  class="static-content booking">
						<fieldset>
                            <h2><span>02 </span>Payment</h2>
                            

                            <div class="row">
								<div class="f-item one-half">
									<label for="mpic">Passport size picture</label>
									<input type="file" id="mpic" name="image"  onchange="readURL();"/>
								</div>
								<div class="f-item one-half">
									<img src="images/avat.png" style="width:200px;height:200px;" id="pm" />
								</div>
							</div>
							<!-- <div class="row">
								<div class="f-item one-half">
									<label>Card type</label>
									<select>
										<option selected>Select card type</option>
										<option>Mastercard</option>
										<option>Visa</option>
										<option>American Express</option>
									</select>
								</div>
								<div class="f-item one-half">
									<label for="card_number">Card number</label>
									<input type="number" id="card_number" name="card_number" />
								</div>
							</div> -->
							
							<div class="row">
								<div class="f-item full-width checkbox">
									<img src="images/momo.png" alt="payment" />
                                </div>
								
							</div>
                            <?php
            // $mmm = preg_split("/ /",$name);

            function convertCurrency($amount,$from_currency,$to_currency){
                $apikey = 'b956567a2dd5aa819f1e';
              
                $from_Currency = urlencode($from_currency);
                $to_Currency = urlencode($to_currency);
                $query =  "{$from_Currency}_{$to_Currency}";
              
                // change to the free URL if you're using the free version
                $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
                $obj = json_decode($json, true);
              
                $val = floatval($obj["$query"]);
              
              
                $total = $val * $amount;
                return number_format($total, 2, '.', '');
              }
              
              //uncomment to test
              $amt =convertCurrency($tt, 'USD', 'GHS');
             
              
        // $amg = floatval($amt);
        // echo $amt;
        $fname = $fname;
        $lname = $lname;
        $email = $email;
        $amount =$amt;
        $r1 = 'BST';
        $r2= rand(1111111,9999999);
        $myref = $r1.''.$r2;
        
        ?>
							<div class="row">
								<div class="f-item full-width checkbox">
                                    <input type="hidden" name="fname"  value=<?php echo $fname;?> />
                                    <input type="hidden" name="lname" id="check" value=<?php echo $lname;?> />
                                    <input type="hidden" name="email" id="check" value=<?php echo $email;?> />
                                    <input type="hidden" name="country" id="check" value=<?php echo $country;?> />
                                    <input type="hidden" name="state" id="check" value=<?php echo $state;?> />
                                    <input type="hidden" name="zip" id="check" value=<?php echo $zip;?> />
                                    <input type="hidden" name="address" id="check" value=<?php echo $address;?> />
                                    <input type="hidden" name="arrival" id="check" value=<?php echo $arrival;?> />
                                    <input type="hidden" name="departure" id="check" value=<?php echo $departure;?> />
                                    <input type="hidden" name="arrivaltime" id="check" value=<?php echo $arrivaltime;?> />
                                    <input type="hidden" name="departuretime" id="check" value=<?php echo $departuretime;?> />
                                    <input type="hidden" name="contact" id="check" value=<?php echo $contact;?> />
                                    <input type="hidden" name="days" id="check" value=<?php echo $days;?> />
                                    <input type="hidden" name="sp" id="check" value=<?php echo $sp;?> />
                                    <input type="hidden" name="tt" id="check" value=<?php echo $tt;?> />
									<input type="hidden" name="type" id="check" value=<?php echo $type;?> />
									<input type="hidden" name="title" id="check" value=<?php echo $title;?> />
                                    <input type="hidden" name="myref" id="check" value=<?php echo $myref;?> />
                                    <input type="checkbox" name="check" id="check" value="ch1" />
									<label>Yes, I have read and I agree to the <a href="#">booking conditions</a>.</label>
								</div>
							</div>
                            
                            
                            <script src="https://js.paystack.co/v1/inline.js"></script> 
							<div class="row">
								<div class="full-width">
									<button type="button" class="gradient-button"  id="next-step"  onclick="payWithPaystack()">Submit booking</button>
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
						<h1><?php echo $title ;?> 
							<span class="stars">
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
								<i class="material-icons">&#xE838;</i>
							</span>
						</h1>
						<span class="address"><?php echo $fname.' '.$lname;?></span>
						<!-- <span class="rating"> 8 /10</span> -->
						<dl class="booking-info">
							<dt><strong>*</strong> ITEM IN CART </dt>
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
    


    <!-- Payment Script -->

    <script>
            var paymentForm = document.getElementById('paymentForm');

            paymentForm.addEventListener('submit', payWithPaystack, false);

            function payWithPaystack() {
                
                var handler = PaystackPop.setup({
                
                    key: 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a', // Replace with your public key
                
                    email: '<?php echo $email?>',
                
                    amount: <?php echo $amount * 100;?>, // the amount value is multiplied by 100 to convert to the lowest currency unit
                
                    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
                
                    firstname: '<?php echo $fname?>',
                
                    lastname: '<?php echo $lname?>',
                
                    ref: '<?php echo $myref ;?>', // Replace with a reference you generated
                    metadata: {
                        custom_fields : 
                            [
                                    {
                                        display_name: 'Mobile Number',
                                        variable_name: 'mobile_number',
                                        value:"+233556676471"
                                    }
                                    
                            
                            ]
                    },
                
                    callback: function(response) {
                
                    //this happens after the payment is completed successfully
                
                    var reference = response.reference;
                    var fname  = '<?php echo $fname;?>';
                    var lname = '<?php echo $lname;?>';
                    var email = '<?php echo $email;?>';
                    var amount = '<?php echo $amount;?>';
                
                    //   alert('Payment complete! Reference: ' + reference);
                    // window.location='success.php?ref='+ reference + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&amount=' + amount ;
                    
                    // Make an AJAX call to your server with the reference to verify the transaction
                    
                        if(response.status == "success"){
                            var myrf = '<?php echo $myref ?>';
                            var mimi = 'dollar';
                            var formdt = $('#paymentForm')[0]; // You need to use standard javascript object here
                            var formData = new FormData(formdt);
                        
                            var opt = {
                                url : "dollar.php",
                                type: "post",
                                data:formData ,
                                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                                processData: false,
                                cache:false, // NEEDED, DON'T OMIT THIS

                                success: function(rep){
                                setTimeout(function () { 
                                    swal({
                                    title: "Success!",
                                    text: "<small>You purchase is successfull  </small>",
                                    type: "success",
                                    html: true,
                                    confirmButtonText: "OK"
                                    },
                                    function(isConfirm){
                                    if (isConfirm) {
                                        window.location = "booking-step3.php?boid=<?php echo $myref ;?>";
                                    }
                                    }); }, 1000);
                                }
                                
                            }
                            $.ajax(opt);
                        
                            

                                
                        
                        }            
                    },
                
                    onClose: function() {
                
                    alert('Transaction was not completed, window closed.');
                
                    },
                
                });
                
                handler.openIframe();
                
                }
        </script>

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
    
    <script src="sweetalert.min.js"></script>
	
	<!-- TEMPLATE STYLES -->
	<div id="template-styles">
		<h2>Template Styles <a href="booking-step2.html#"><img class="s-s-icon" src="images/settings.png" alt="Style switcher" /></a></h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors" >
				<li><a href="booking-step2.html#" class="yellow" title="yellow"></a></li>
				<li><a href="booking-step2.html#" class="orange" title="orange"></a></li>
				<li><a href="booking-step2.html#" class="strawberry" title="strawberry"></a></li>
				<li><a href="booking-step2.html#" class="pink" title="pink"></a></li>
				<li><a href="booking-step2.html#" class="purple" title="purple"></a></li>
				<li><a href="booking-step2.html#" class="blue" title="blue"></a></li>
				<li><a href="booking-step2.html#" class="turqoise" title="turqoise"></a></li>
				<li><a href="booking-step2.html#" class="black" title="black"></a></li>
			</ul>
		</div>
	</div>
    <script src="js/styler.js"></script>
    

    




    <!-- ends Payment Script -->


   
</body>
</html>