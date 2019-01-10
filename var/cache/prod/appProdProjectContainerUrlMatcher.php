<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_homepage'));
                }

                return $ret;
            }
            not_admin_homepage:

            // create_article
            if ('/admin/article' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::createArticleAction',  '_route' => 'create_article',);
            }

            if (0 === strpos($pathinfo, '/admin/article_')) {
                // article_push
                if ('/admin/article_push' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::pushArticleAction',  '_route' => 'article_push',);
                }

                // article_modify
                if ('/admin/article_modify' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::articleModifyAction',  '_route' => 'article_modify',);
                }

                // article_delete
                if ('/admin/article_delete' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::articleDeleteAction',  '_route' => 'article_delete',);
                }

            }

            // manage_page
            if ('/admin/manage' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::managePageAction',  '_route' => 'manage_page',);
            }

        }

        // store_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'StoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'store_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_store_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'store_homepage'));
            }

            return $ret;
        }
        not_store_homepage:

        // list_article
        if ('/list_article' === $pathinfo) {
            return array (  '_controller' => 'StoreBundle\\Controller\\DefaultController::getArticleAction',  '_route' => 'list_article',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
