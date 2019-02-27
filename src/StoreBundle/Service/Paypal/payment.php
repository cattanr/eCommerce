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
use StoreBundle\Paypal\CreateTransaction;

$apiContext = new \Paypal\Rest\Context(
    new \Paypal\Auth\OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);
$payment = new Payment();
$payment->addTransaction(CreateTransaction::cartToTransaction());
$payment->setIntent('sale');
$redirectUrls = (new RedirectUrls())
->setRedirectUrl('')
->setCancelUrl('');
$payment->setRedirectUrls($redirectUrls);
$payment->setPayer((new Payer())->setPaymentMethod('paypal'));

try {
    $payment->create($apiContext);
    echo json_encode([
        'id' =>$payment->getId()
        ]);
} catch (\Paypal\Exception\PaypalConnectionException $e) {
    var_dump(json_decode($e->getData()));
}