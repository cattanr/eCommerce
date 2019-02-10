<?php

namespace StoreBundle\Service;

class ItemCart 
{
    public $article;
    
    public $quantity;

    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

}
