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
    public function managePageAction()
    {
        $repository = $this->getDoctrine()->getRepository('StoreBundle:Article');
        $articles = $repository->findAll();
        return $this->render('@Admin/Default/manage.html.twig', array('articles'=>$articles));
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
        $article->setNom($request->get("name"));
        $article->setPrice($request->get("price"));
        $article->setImage($request->get("image"));
        $article->setDescription($request->get("description"));
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
    }

}
