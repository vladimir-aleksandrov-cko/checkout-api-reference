<?php

$checkout = new CheckoutApi('{secret_key_goes_here}');
$paymentID = '{pay_id}';
$captureAmount = 100; // 0 or false for full capture

try {

    return $checkout->payments()->capture($paymentID, $captureAmount = 100, '{reference}');

} catch (CheckoutHttpException $ex) {
    return $ex->getBody();
}
