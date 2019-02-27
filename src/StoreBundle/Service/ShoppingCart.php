<?php

namespace StoreBundle\Service;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ShoppingCart
{
    static public function mainCart($cart, $action, $article)
    {
        if (!isset($cart['article']))
            $cart['article'] = [];
        ShoppingCart::{key($action)}($cart, reset($action), $article);
        return $cart;
    }

    public function totalPrice(&$cart, $price) {
        if (!isset($cart['totalPrice']))
            $cart['totalPrice'] = 0;
        $cart['totalPrice'] += $price;
    }

    static private function addItem(&$cart, $id, $article)
    {
        if (!isset($cart['article'][$id])){
            $cart['article'][$id] = $article;
            $cart['article'][$id]["quantity"] = 1;
        }
        else{
            $cart['article'][$id]["quantity"] +=1;
            $quantity = $cart['article'][$id]["quantity"];
        }
        ShoppingCart::totalPrice($cart, ($cart['article'][$id][0]->getSalePrice()));
    }

    static private function minusItem(&$cart, $id, $article)
    {
        ShoppingCart::totalPrice($cart, ($cart['article'][$id][0]->getSalePrice() * -1));
        if ($cart['article'][$id]["quantity"] == 1)
            unset($cart['article'][$id]);
        else
            $cart['article'][$id]["quantity"] -= 1;
    }

    static private function plusItem(&$cart, $id, $article)
    {
        ShoppingCart::totalPrice($cart, ($cart['article'][$id][0]->getSalePrice()));
        $cart['article'][$id]["quantity"] += 1;
    }

    static private function removeItem(&$cart, $id, $article)
    {
        ShoppingCart::totalPrice($cart, (($cart['article'][$id][0]->getSalePrice()
            * $cart['article'][$id]["quantity"]) * -1));
        unset($cart['article'][$id]);
    }


}