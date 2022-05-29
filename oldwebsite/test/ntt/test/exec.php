<html>
    <head>
        <title>Payment process</title>
    </head>
    <body>
        Hello <?php echo $_POST['fn']; ?><br>
        Complete the payment for the process to Complete
        <!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
  id="checkout-button-price_1ISgWZHlAUfnF2H6zRZSBnyF"
  role="link"
  type="button"
>
  Pay ₹30
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
</script>

</html>



<?php
    if (isset($_POST['s1'])) {

      $no = $_POST['email'];

      $myfile = fopen("$no.txt", "w") or die("Unable to open file");
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

      fclose($myfile);
    }

    
  ?>