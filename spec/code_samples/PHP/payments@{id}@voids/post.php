<?php

$checkout = new CheckoutApi('{secret_key_goes_here}');
$paymentID = '{pay_id}';

try {

    return $checkout->payments()->voids($paymentID, '{reference}');

} catch (CheckoutHttpException $ex) {
    return $ex->getBody();
}
