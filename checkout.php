<?php

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51IfJULDGml9qsI0jokH5FJS0mhGdiYVZb3g3UzBp8fkTWfOGvtk4qPcsj1msuE1eHbHAke8pDPVkP66IOWCxkObO00hxd1ur2o');

$intent = \Stripe\PaymentIntent::create([
    'amount' => 1099,
    'currency' => 'usd',
    // Verify your integration in this guide by including this parameter
    'metadata' => ['integration_check' => 'accept_a_payment'],
]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Accept a card payment</title>
    <meta name="description" content="A demo of a card payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="./css/global.css" />
</head>

<body>
    <h1>

    </h1>
    <!-- Display a payment form -->
    <form id="payment-form" data-secret="<?php echo $intent->client_secret; ?>">
        <div id="card-element">
            <!-- Elements will create input elements here -->
        </div>

        <!-- We'll put the error messages in this element -->
        <div id="card-errors" role="alert"></div>

        <button id="card-button">Submit Payment</button>
    </form>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="./js/client.js" defer></script>
</body>

</html>