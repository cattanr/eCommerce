<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StoreBundle\Entity\Article;
use StoreBundle\Entity\Category;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Admin/Default/index.html.twig');
    }
    public function managePageAction(Request $request)
    {
        $categories['homme'] = $this->getDoctrine()->getRepository("StoreBundle:Category")->findBy(['gender' => 'homme']);
        $categories['femme'] = $this->getDoctrine()->getRepository("StoreBundle:Category")->findBy(['gender' => 'femme']);
        $categories['unisex'] = $this->getDoctrine()->getRepository("StoreBundle:Category")->findBy(['gender' => 'unisex']);
        if ($request->get('id') != NULL){
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findByCategory($this->getDoctrine()->getRepository('StoreBundle:Category')->findById($request->get('id')));
            return $this->render('@Admin/Default/manage.html.twig', array('articles' => $articles, 'categories' => $categories));
        }
        else{
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findAll();
            return $this->render('@Admin/Default/manage.html.twig', array('articles' => $articles, 'categories' => $categories));
        }
    }

    public function createArticleAction()
    {
        $categories['homme'] = $this->getDoctrine()->getRepository("StoreBundle:Category")->findBy(['gender' => 'homme']);
        $categories['femme'] = $this->getDoctrine()->getRepository("StoreBundle:Category")->findBy(['gender' => 'femme']);
        $categories['unisex'] = $this->getDoctrine()->getRepository("StoreBundle:Category")->findBy(['gender' => 'unisex']);
        return $this->render('@Admin/Default/add_article.html.twig', array('categories' => $categories));
    }
    public function pushArticleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->get("id"))
            $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("id"));
        else
            $article = new Article();
        $article->setName($request->get("name"));
        $article->setPrice($request->get("price"));
        $article->setImage($request->get("image"));
        $article->setDescription($request->get("description"));
        $article->setCategory($this->getDoctrine()->getRepository('StoreBundle:Category')
            ->findOneById($request->get("category")));
        $em->persist($article);
        $em->flush();
        echo(1);
        die();
    }
    public function articleModifyAction(Request $request)
    {
        if ($request->get("id")) {
            $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("id"));
            return $this->render('@Admin/Default/modify_article.html.twig',array('article' => $article));
        }
        return $this->render('@Admin/Default/modify_article.html.twig');
    }
    public function articleDeleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("id"));
        $em->remove($article);
        $em->flush();
        echo(1);
        die();
    }

    public function setSaleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("id"));
        $salePercent = $request->get("sale");
        $price = $article->getPrice();
        if ($salePercent == 0 || $salePercent > 100){
            $salePrice = $price;
            $article->setSalePrice($price);
            $article->setSalePercent(0);
        }
        $article->setSalePercent($salePercent);
        $convertPercent = ($salePercent * $price) / 100;
        $price = $price - $convertPercent;
        $article->setSalePrice($price); 
        $em->persist($article);
        $em->flush();
        echo(1); die();
    }

    public function stockAction()
    {
        $categories['homme'] = $this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(['gender' => 'homme']);
        $categories['femme'] = $this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(['gender' => 'femme']);
        $categories['unisex'] = $this->getDoctrine()->getRepository('StoreBundle:Category')->findBy(['gender' => 'unisex']);
        $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->findAll();
        $alerts = $this->getDoctrine()->getRepository('StoreBundle:Article')->getArticleAlert();
        $dangers = $this->getDoctrine()->getRepository('StoreBundle:Article')->getArticleDanger();
        return $this->render('@Admin/Default/stock.html.twig', array('articles' => $articles, 'alerts' => $alerts, 'dangers' => $dangers, 'categories' => $categories));
    }

    public function setStockAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository('StoreBundle:Article')->findOneById($request->get("id"));
        $article->setStock($request->get("stock"));
        $em->persist($article);
        $em->flush();
        echo(1);
        die();
    }

}
