<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StoreBundle\Entity\Article;
use StoreBundle\Entity\Category;
use StoreBundle\Entity\Gender;
use StoreBundle\Service\ItemCart;

class DefaultController extends Controller
{
    public function searchObjectByArticle($cart, $id)
    {
        for ($i=0; $i < count($cart) ; $i++)
            if ($cart[$i]->getArticle()->getId() == $id)
                return $cart[$i];
        return NULL;
    }

    public function removeObjectFromCart($cart, $id)
    {
        for ($i=0; $i < count($cart); $i++) { 
            if ($cart[$i]->getArticle()->getId() == $id) {
                unset($cart[$i]); 
                $cart = array_values($cart);
                break;
            }
        }
        return $cart;
    }

    public function indexAction(Request $request)
    {
        $session = $this->get('session');
        $cart = $session->get('cart', array());
        if ($request->get("addItem")){
            $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("addItem"));
            $id = $article->getId();
            $object = $this->searchObjectByArticle($cart, $id);
            if ($object == NULL){
                $itemCart = $this->get(ItemCart::class);
                $itemCart->setArticle($article);
                $itemCart->setQuantity(1);
                $cart[] = $itemCart;
            }
            else{
                $quantity = $object->getQuantity();
                $quantity +=1;
                $object->setQuantity($quantity);
            }
        }
        if ($request->get("minusItem")){
            $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("minusItem"));
            $id = $article->getId();
            $object = $this->searchObjectByArticle($cart, $id);
            $quantity = $object->getQuantity();
            $quantity -=1;
            $object->setQuantity($quantity);
            if ($quantity == 0)
                $cart = $this->removeObjectFromCart($cart, $id);
        } 
        if ($request->get("plusItem")){
            $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("plusItem"));
            $id = $article->getId();
            $object = $this->searchObjectByArticle($cart, $id);
            $quantity = $object->getQuantity();
            $quantity +=1;
            $object->setQuantity($quantity);
        }
        if ($request->get("removeItem")){
            $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("removeItem"));
            $id = $article->getId();
            $cart = $this->removeObjectFromCart($cart, $id);
        }
        $len = count($cart);
        $session->set('cart', $cart);        
        return $this->render('@Store/Default/home.html.twig', array('cart' => $cart, 'length' => $len));
    }

    public function getArticleAction(Request $request)
    {
        $page = $request->get('page');
        $repository = $this->getDoctrine()->getRepository('StoreBundle:Article');
        $nbrPage = $repository->countPage() / 3;
        $nbrPage = ceil($nbrPage);
        $articles = $repository->findByPage(($page-1) * 3, 3);
        return $this->render('@Store/Default/list_article.html.twig', array('page' => $page, 'articles' => $articles, 'nbrPage' => $nbrPage));
    }

    public function displayDataAction(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(['gender' => $request->get('gender')]);
        $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findByCategory($this->getDoctrine()->getRepository('StoreBundle:Category')->findByGender($request->get('gender')));
        return $this->render('@Store/Default/display_home_data.html.twig', array('categories' => $categories, 'articles' => $articles));
    }

    public function displayCategoryDataAction(Request $request)
    {
        $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findByCategory($this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(array('name' => $request->get('name'), 'gender' => $request->get('gender'))));
        return $this->render('@Store/Default/display_category_data.html.twig', array('articles' => $articles));
    }

    public function displayArticleAction(Request $request)
    {
        $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("id"));
        return $this->render('@Store/Default/display_article.html.twig', array('article' => $article));
    }

    public function userAction()
    {
        return $this->render('@Store/Default/user.html.twig');
    }
}
