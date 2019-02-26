<?php

namespace StoreBundle\Service\Paypal;

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

class CreateTransaction
{
    static function cartToTransaction($cart, float $vatRate = 0): Transaction
    {
        $session = $this->get('session');
        $cart = ShoppingCart::getCart($session);

        $list = new ItemList();
        foreach ($variable as $key => $value) {
            $item = (new Item())
                ->setName()
                ->setPrice()
                ->setCurrency('EUR')
                ->setQuantity();
            $list->addItem($item);
        }

        $details = (new Details())
            ->setTax($cart->getVatPrice($vatRate))  //dans le cart faire une méthode return round($price * $rate *100) / 100;
            ->setSubtotal($cart->getTotalPrice());

        $amount = (new Amount())
            ->setTotal($cart->getTotalPrice() + $cart->getVatPrice($vatRate))
            ->setCurrency('EUR')
            ->setDetails($details);

        return (new Transaction())
            ->setItemList($list)
            ->setDescription('Achat sur le store')
            ->setAmount($amount)
            ->setCustom('test');  
    }
}