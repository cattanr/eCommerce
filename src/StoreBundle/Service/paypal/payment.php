<?php

require 'vendor/autoload.php';
$ids = require 'paypal.php';
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use StoreBundle\Service\ShoppingCart;
use Symfony\Component\HttpFoundation\Session\Session;

$session = $this->get('session');
$cart = ShoppingCart::getCart($session);

$apiContext = new \Paypal\Rest\Context(
    new \Paypal\Auth\OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);
$payment = new Payment();
$payment->create($apiContext);
$payment->setIntent('sale');
$redirectUrls = (new RedirectUrls())
    ->setRedirectUrl('')
    ->setCancelUrl('');
$payment->setRedirectUrls($redirectUrls);
$payment->setPayer((new Payer())->setPaymentMethod('paypal'));

$list = new ItemList();
foreach ($variable as $key => $value) {
    # code...
}

$amount = new Amount();

$payment->setTransaction()