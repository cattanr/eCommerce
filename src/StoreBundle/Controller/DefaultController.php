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
        return $this->render('@Store/Default/home.html.twig');
    }

    public function getArticleAction(Request $request)
    {
        $page = $request->get('page');
        $repository = $this->getDoctrine()->getRepository('StoreBundle:Article');
        $nbrPage = $repository->countPage() / 3;
        $nbrPage = ceil($nbrPage);
        $articles = $repository->findByPage(($page-1) * 3, 3);
        return $this->render('@Store/Default/list_article.html.twig',
            array(
                'page' => $page,
                'articles' => $articles,
                'nbrPage' => $nbrPage
            )
        );
    }

    public function displayDataAction($gender, $category, Request $request)
    {
        $categories = $this->getDoctrine()->getRepository('StoreBundle:Category');
        $categories = $category === "" ? $categories->findByGender($gender) :
            $categories->findBy(array('name' => $category, 'gender' => $gender));
        $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')
            ->findByCategory($categories);
        return $this->render('@Store/Default/display_home_data.html.twig',
            array(
                'categories' => $this->getDoctrine()
                    ->getRepository('StoreBundle:Category')->findByGender($gender),
                'articles' => $articles,
            )
        );
    }

    public function displayArticleAction($gender, $category, $slug, $id, Request $request)
    {
        return $this->render('@Store/Default/display_article.html.twig',
        array(
            'categories' => $this->getDoctrine()->getRepository('StoreBundle:Category')->findByGender($gender),
            'article' => $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($id),
        ));
    }

    public function pushCartAction(Request $request)
    {
        $session = $this->get('session');
        $session->set('cart',
            ShoppingCart::mainCart(
                $session->get('cart', array()),
                $request->get("action_cart"),
                key($actionCart) === 'addItem' ?
                    $this->getDoctrine()
                    ->getRepository("StoreBundle:Article")
                    ->findById($actionCart['addItem'][0]) : null
            )
        );
        die();
    }

    public function basketAction() {
        $cart = $this->get('session')->get('cart', array());
        return $this->render('@Store/Default/basket.html.twig', array(
            'cart' => $cart,
            'length' => isset($cart['article']) ? count($cart['article']) : 0
        ));
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
