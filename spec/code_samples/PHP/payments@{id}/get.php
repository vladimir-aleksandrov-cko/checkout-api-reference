<?php

$checkout = new CheckoutApi('your secret key');
$threeDsSessionId = 'sid_y3oqhf46pyzuxjbcn2giaqnb44';

$details = $checkout->payments()->details($threeDsSessionId);

if($details->isSuccessful()) {
    return $details->getSourceId();
}
