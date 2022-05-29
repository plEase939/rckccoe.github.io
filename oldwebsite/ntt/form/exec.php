<html>
    <head>
        <title>Payment process</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:rgba(255,102,0,1);
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:rgba(255,102,0,1);
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
    
    .buttons ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.buttons li {
  float: left;
  margin-left: 15%;
}

.buttons li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
  
}

.buttons {
  font-size: 15.3px;
}
   
</style>
    </head>
    <body>
    <div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h1>Registration successful</h1>
               <p>Hey <?php echo $_POST['fn']; ?>, Click the button below to complete the payment.</p>
               <!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>
<hr>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<div class="buttons">
  <ul>
    <li><button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
  id="checkout-button-price_1ISgWZHlAUfnF2H6zRZSBnyF"
  role="link"
  type="button"
  value="test/"
  
>
  Checkout via card
</button></li>
  <li><!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
  id="checkout-button-price_1ISgWZHlAUfnF2H6zRZSBnyF"
  role="link"
  type="button"
  onclick="window.location.href = 'https://forms.gle/WxCXKooQgnUkJNKX9';" 
  value="Redirect"
>
  Checkout via UPI
</button>

<div id="error-message"></div>

<script>
(function() {
  var stripe = Stripe('pk_live_51HCuSIHlAUfnF2H6I9gEKUaGAoHjD08tIFq3BiTrM0zy6ees6KpBZ5fCFCJUvV6yCa5RT4G0MLYEmfkzTG0QYQR800NxxnuggH');

  var checkoutButton = document.getElementById('checkout-button-price_1ISgWZHlAUfnF2H6zRZSBnyF');
  checkoutButton.addEventListener('click', function () {
    /*
     * When the customer clicks on the button, redirect
     * them to Checkout.
     */
    stripe.redirectToCheckout({
      lineItems: [{price: 'price_1ISgWZHlAUfnF2H6zRZSBnyF', quantity: 1}],
      mode: 'payment',
      /*
       * Do not rely on the redirect to the successUrl for fulfilling
       * purchases, customers may not always reach the success_url after
       * a successful payment.
       * Instead use one of the strategies described in
       * https://stripe.com/docs/payments/checkout/fulfill-orders
       */
      successUrl: 'http://rckccoe.org/success',
      cancelUrl: 'http://rckccoe.org/canceled',
    })
    .then(function (result) {
      if (result.error) {
        /*
         * If `redirectToCheckout` fails due to a browser or network
         * error, display the localized error message to your customer.
         */
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();
</script></li>
            </div>
            
         </div>
      </div>
   </div>
</div>
</body>

</html>



<?php
    if (isset($_POST['s1'])) {

      $no = $_POST['email'];

      $myfile = fopen("entries.txt", "a") or die("Unable to open file");
      $firstname = $_POST['fn']."\n";
      fwrite($myfile, $firstname);

      $lastname = $_POST['ln']."\n";
      fwrite($myfile, $lastname);

      $email = $_POST['email']."\n";
      fwrite($myfile, $email);

      $number = $_POST['no']."\n";
      fwrite($myfile, $number);

      $alternate = $_POST['al']."\n";
      fwrite($myfile, $alternate);

      $end = "===============================================\n";
      fwrite($myfile, $end);

      fclose($myfile);
    }

    
  ?>