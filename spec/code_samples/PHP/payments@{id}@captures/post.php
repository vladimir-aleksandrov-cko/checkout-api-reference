<?php

$checkout = new CheckoutApi('your secret key');
$paymentID = 'pay_y3oqhf46pyzuxjbcn2giaqnb44';

// Full Capture
$refund = new Capture($paymentID);

// Or partial capture
$refund = new Capture($paymentID);
$refund->reference = 'your reference';
$refund->amount = 100;

return $checkout->payments()->capture($refund);
