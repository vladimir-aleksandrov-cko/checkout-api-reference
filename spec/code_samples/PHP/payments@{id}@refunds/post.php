<?php

$checkout = new CheckoutApi('{secret_key_goes_here}');
$paymentID = '{pay_id}';
$refundAmount = 100; // 0 or false for full refund

try {

    return $checkout->payments()->refund($paymentID, $refundAmount = 100, '{reference}');

} catch (CheckoutHttpException $ex) {
    return $ex->getBody();
}
