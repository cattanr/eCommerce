<?php

namespace StoreBundle\Service;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ShoppingCart
{

    static public function mainCart(Session $session, Request $request)
    {
        if ($request->get("addItem")){
            $id = $request->get("addItem");
            $article =  getDoctrine()->getRepository('StoreBundle:Article')->findById($id);
            $cart = ShoppingCart::getCart($session);
            $cart = ShoppingCart::addItem($cart, $id, $article);
            ShoppingCart::setCart($session, $cart);
        }
        if ($request->get("minusItem")){
            $id = $request->get("minusItem");
            $cart = ShoppingCart::getCart($session);
            $cart = ShoppingCart::minusItem($cart, $id);
            ShoppingCart::setCart($session, $cart);
        } 
        if ($request->get("plusItem")){
            $id = $request->get("plusItem");
            $cart = ShoppingCart::getCart($session);
            $cart = ShoppingCart::plusItem($cart, $id);
            ShoppingCart::setCart($session, $cart);
        }
        if ($request->get("removeItem")){
            $id = $request->get("removeItem");
            $cart = ShoppingCart::getCart($session);
            $cart = ShoppingCart::removeItem($cart, $id);
            ShoppingCart::setCart($session, $cart);
        }  
    }

    static public function getCart(Session $session)
    {
        return $session->get('cart', array());
    }
    static private function setCart(Session $session, $cart)
    {
        $session->set('cart', $cart);
    }
    //récupérer la session, faire des méthodes statiques qui set et get les objets
    //objet[id].quantity
    //pas de session en param
    //tout le reste en private pas d'instance ShoppingCart::function

    static private function addItem($cart, $id, $article)
    {
        if ($cart == []){
            $cart["{$id}"] = $article;
            $cart["{$id}"]["quantity"] = 1;
            //$cart["{$id}"]["quantityPrice"] = $price;
        }
        else{
            $cart["{$id}"] = $article;
            $cart["{$id}"]["quantity"] += 1;
            //$quantity = $cart["{$id}"]["quantity"];
            //$cart["{$id}"]["quantityPrice"] = $price * $quantity;
        }
        return $cart;
    }

    static private function minusItem($cart, $id)
    {
        if ($cart["{$id}"]["quantity"] == 0)
            unset($cart["{$id}"]);
        else{
            $cart["{$id}"]["quantity"] -= 1; 
            //$quantity = $cart["{$id}"]["quantity"];
            //$cart["{$id}"]["quantityPrice"] = $price * $quantity;
        }
        return $cart;
    }

    static private function plusItem($cart, $id)
    {
        $cart["{$id}"]["quantity"] += 1; 
        //$quantity = $cart["{$id}"]["quantity"];
        //$cart["{$id}"]["quantityPrice"] = $price * $quantity;
        return $cart;
    }

    static private function removeItem($cart, $id)
    {
        unset($cart["{$id}"]);
        return $cart;
    }


}