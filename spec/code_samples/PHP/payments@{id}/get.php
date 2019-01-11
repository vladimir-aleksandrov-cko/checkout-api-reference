<?php

$checkout = new CheckoutApi('{secret_key_goes_here}');
$threeDsSessionId = '{sid}';

try {

    $result = $checkout->payments()->details($threeDsSessionId);

   	if($result->isSuccessful()) {
   		return $result->getSourceId();
   	}

} catch (CheckoutHttpException $ex) {
    return $ex->getBody();
}
