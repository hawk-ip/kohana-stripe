<?php

$mode = Kohana::$config->load('stripe.status');
$private_key = Kohana::$config->load("stripe.$mode.secret_key");

require_once Kohana::find_file('vendor', 'stripe-php/lib/Stripe', 'php');


Stripe::setApiKey($private_key);


