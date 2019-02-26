<?php

require 'vendor/autoload.php';
$ids = require 'paypal.php';
use StoreBundle\Paypal\CreateTransaction;

$apiContext = new \Paypal\Rest\Context(
    new \Paypal\Auth\OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);

//récupérer le basket 

$payment = \Paypal\Api\Payment::get($_POST['paymentID'], $apiContext);
// pour appliquer la TVA vérifier ça $payment->getPayer()->getPayerInfo()->getCountryCode();

$execution = (new \Paypal\Api\PaymentExecution())
    ->setPayerId($_POST['payerID'])
    ->addTransactions($payment->getPayer()->getPayerInfo()->getCountryCode() == 'FR' ? (CreateTransaction::cartToTransaction($cart, 0.2)) : CreateTransaction::cartToTransaction($cart));

try {
    $payment->execute($execution, $apiContext);
    
} catch (\Paypal\Exception\PaypalConnectionException $e) {
    header('', true, 500);
    var_dump(json_decode($e->getData()));
}
