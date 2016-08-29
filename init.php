<?php

$mode = Kohana::config('stripe.status');
$private_key = Kohana::config("stripe.$mode.secret_key");

Stripe\Stripe::setApiKey($private_key);


