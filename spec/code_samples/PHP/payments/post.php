<?php

$checkout = new CheckoutApi('{secret_key_goes_here}');

$method = new TokenSource('{token_id_goes_here}');
$payment = new Payment($method, 'USD');

$payment->amount = 5600;
$payment->capture = false;
$payment->reference = 'ORD-090857';
$payment->threeDs = new ThreeDS(true);

try {
    $result = $checkout->payments()->request($payment);

    $redirection = $result->getRedirection();
    if($redirection) {
        return $redirection;
    }

    return $result;

} catch (CheckoutModelException $ex) {
    return $ex->getBody();
} catch (CheckoutHttpException $ex) {
    return $ex->getBody();
}
