<?php

$mode = Kohana::config('stripe.status');
$private_key = Kohana::config("stripe.$mode.secret_key");

Stripe::setApiKey($private_key);


