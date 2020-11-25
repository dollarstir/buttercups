<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<form id="paymentForm"></form>
<script src="https://js.paystack.co/v1/inline.js"></script>
<center> <button type="button" class="btn btn--round btn--default" onclick="payWithPaystack()">Buy Now</button><center>
</form>

<script>
            var paymentForm = document.getElementById('paymentForm');

            paymentForm.addEventListener('submit', payWithPaystack, false);

            function payWithPaystack() {
                
                var handler = PaystackPop.setup({
                
                    key: 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a', // Replace with your public key
                
                    email: 'kpin463@gmail.com',
                
                    amount: <?php echo 5 * 100 * 5.7 ;?>, // the amount value is multiplied by 100 to convert to the lowest currency unit
                
                    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
                
                    firstname: 'dollar',
                
                    lastname: 'Stir',
                
                    ref: 'sdfdfsd', // Replace with a reference you generated
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
                    var fname  = 'dd';
                    var lname = 'ddd';
                    var email = 'kpin463@gmail.com';
                    var amount = '20';
                
                    //   alert('Payment complete! Reference: ' + reference);
                    // window.location='success.php?ref='+ reference + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&amount=' + amount ;
                    
                    // Make an AJAX call to your server with the reference to verify the transaction
                    
                        if(response.status == "success"){
                            var myrf = 'dsddsf';
                            var mimi = 'dfdsfds';
                        
                            var opt = {
                                url : "dollar.php",
                                type: "post",
                                data: {rr: myrf, mim: mimi},
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
                                        window.location = "dashboard-purchase.php";
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

    
</body>
</html>