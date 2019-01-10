<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StoreBundle\Entity\Article;
use StoreBundle\Entity\Category;
use StoreBundle\Entity\Gender;

class DefaultController extends Controller
{
    public function indexAction()
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
        return $this->render('@Store/Default/list_article.html.twig', array('page' => $page, 'articles' => $articles, 'nbrPage' => $nbrPage));
    }
    // public function pushCategoryAction()
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $gender = New Gender();
    //     $gender->setType("unisex");
    //     $em->persist($gender);
    //     $em->flush();
    //     return $this->render('@Store/Default/db_push_category.html.twig');
    // }
}
