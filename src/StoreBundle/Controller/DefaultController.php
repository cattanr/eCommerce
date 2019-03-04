<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StoreBundle\Entity\Article;
use StoreBundle\Entity\Category;
use StoreBundle\Entity\Gender;
use StoreBundle\Service\ShoppingCart;
use StoreBundle\Service\Stripe;
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
        $nbrPage = ceil($repository->countPage() / 3);
        //nbrPage = ceil($nbrPage);
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
        $cart = $this->get('session')->get('cart', array());
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
        $actionCart = $request->get("action_cart");
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
        if($type === "ASC"){
            $gender = $request->get("gender");
            $category = urldecode($request->get("category"));
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->sortBy($type, $gender, $category);
        }
        if($type === "DESC"){
            $gender = $request->get("gender");
            $category = urldecode($request->get("category"));
            $articles = $this->getDoctrine()->getRepository('StoreBundle:Article')->sortBy($type, $gender, $category);        
        }
        return $this->render('@Store/Default/sortArticle.html.twig', array('articles' => $articles));
    }

    public function payAction(Request $request)
    {
        $cart = $this->get('session')->get('cart');
        return $this->render('@Store/Default/pay.html.twig', array('cart' => $cart));
    }

    public function submitPaymentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $cart = $session->get('cart');
        $token = $request->get('stripeToken');
        $email = $this->getUser()->getEmail();
        $name = $this->getUser()->getUsername();
        if ($email && $name && !empty($token)) {
            $stripe = new Stripe('sk_test_Dd3DdsKI8yvUgAwN2CfHfoNf');
            $customer = $stripe->api('customers', [
                'source' => $token,
                'description' => $name,
                'email' => $email
            ]);
            $charge = $stripe->api('charges', [
                'amount' => ($cart["totalPrice"] * 100),   //les montants sont en centimes, récupérer le cart["total"] ici
                'currency' => 'eur',
                'customer' => $customer->id
            ]);
            // $createAt = new \DateTime();                  set une string qui a été json_encode et la set en db (probleme erreur sur l'id alors que c'est l'exemple de la doc)
            // $createAt = $createAt->format('Y-m-d H:i:s');
            // $order = json_encode(array(
            //     'orderId' => $charge->id, 
            //     'createdAt' => $createAt,
            //     'total' => $cart['totalPrice']
            // ));
            // $user = $this->getUser();
            // $user->setOrder($order);
            // $this->get('fos_user.user_manager')->updateUser($user, false);
            //$this->getDoctrine()->getManager()->flush();
            $session->set('cart', array());
            return $this->redirect($this->generateUrl('store_homepage'));
            die("le payment a bien été effectué");

            //push le customer id en db, un tableau payments avec clés datetime le cart et un id d'achat pour générer une facture
        }
    }

}