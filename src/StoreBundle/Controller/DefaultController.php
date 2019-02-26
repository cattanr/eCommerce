<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StoreBundle\Entity\Article;
use StoreBundle\Entity\Category;
use StoreBundle\Entity\Gender;
use StoreBundle\Service\ShoppingCart;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $session = $this->get('session');
        $cart = ShoppingCart::getCart($session);
        $len = count($cart);
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

    public function displayDataAction($gender, $category, Request $request)
    {
        $session = $this->get('session');
        $repository = $this->getDoctrine()->getRepository("StoreBundle:Article");
        if ($category == "")
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findByCategory($this->getDoctrine()->getRepository('StoreBundle:Category')->findByGender($gender));
        else
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findByCategory($this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(array('name' => $category, 'gender' => $gender)));
        $categories = $this->getDoctrine()->getRepository('StoreBundle:Category')->findByGender($gender); 
        $cart = ShoppingCart::getCart($session);
        $len = count($cart); 
        return $this->render('@Store/Default/display_home_data.html.twig', array('categories' => $categories, 'articles' => $articles, 'cart' => $cart, 'length' => $len));
    }

    public function displayArticleAction($gender, $category, $slug, $id, Request $request)
    {
        $session = $this->get('session');
        $repository = $this->getDoctrine()->getRepository("StoreBundle:Article");
        $categories = $this->getDoctrine()->getRepository('StoreBundle:Category')->findByGender($gender);  
        $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($id);
        $cart = ShoppingCart::getCart($session);
        $len = count($cart);
        return $this->render('@Store/Default/display_article.html.twig', array('categories' => $categories, 'article' => $article, 'cart' => $cart, 'length' => $len));
    }

    public function pushCartAction(Request $request)
    {
        $session = $this->get('session');
        $repository = $this->getDoctrine()->getRepository("StoreBundle:Article");
        ShoppingCart::mainCart($session, $request, $repository);
        echo("success cart"); die();
    }

    public function articleSortAction(Request $request)
    {
        $type = $request->get("sort");
        if($type == "ASC"){
            $gender = $request->get("gender");
            $category = urldecode($request->get("category"));
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->sortBy($type, $gender, $category);
        }
        if($type == "DESC"){
            $gender = $request->get("gender");
            $category = urldecode($request->get("category"));
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->sortBy($type, $gender, $category);        
        }
        if($type == "NEW"){
            $gender = $request->get("gender");
            $category = urldecode($request->get("category"));
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->sortBy($type, $gender, $category);        
        }
        return $this->render('@Store/Default/sortArticle.html.twig', array('articles' => $articles));
    }

    public function payAction(Request $request)
    {
        return $this->render('@Store/Default/paypal.html.twig');
    }
}
