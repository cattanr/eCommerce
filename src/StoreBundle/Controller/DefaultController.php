<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StoreBundle\Entity\Article;
use StoreBundle\Entity\Category;
use StoreBundle\Entity\Gender;
use StoreBundle\Service\ShoppingCart;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $session = $this->get('session');
        if ($request)
            ShoppingCart::mainCart($session, $request);
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

    public function displayDataAction(Request $request)
    {
        $gender = $request->get('gender');
        $categories = $this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(['gender' => $gender]);
        $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findByCategory($this->getDoctrine()->getRepository('StoreBundle:Category')->findByGender($gender));
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
