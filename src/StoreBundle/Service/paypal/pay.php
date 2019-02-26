<?php

require 'vendor/autoload.php';
$ids = require 'paypal.php';

$apiContext = new \Paypal\Rest\Context(
    new \Paypal\Auth\OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);

//récupérer le basket 

$payment = \Paypal\Api\Payment::get($_POST['PaymentID'], $apiContext);
// pour appliquer la TVA vérifier ça $payment->getPayer()->getPayerInfo()->getCountryCode();

$execution = (new \Paypal\Api\PaymentExecution())
    ->setPayerId($_GET['PayerID'])
    ->setTransactions($payment->getTransactions());

try {
    $payment->execute($execution, $apiContext);
} catch (\Paypal\Exception\PaypalConnectionException $e) {
    var_dump(json_decode($e->getData()));
}
