<?php

$checkout = new CheckoutApi('your secret key');

$address = new BillingAddress('{address_line_1}', '{address_line_2}', '{city}', '{state}', '{post_code}', '{country_code}');
$data = new SepaData('{first_name}', '{surname}', '{iban}', '{bic}', '{descriptor}', '{mandate}');
$sepa = new Sepa($address, $data);

try {

    return $checkout->sources()->add($sepa);

} catch (CheckoutHttpException $ex) {
    return $ex->getBody();
}
