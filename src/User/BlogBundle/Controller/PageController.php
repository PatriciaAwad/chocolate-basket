<?php
/**
 * Created by PhpStorm.
 * iim: HP
 * Date: 30/12/13
 * Time: 14:42
 */
// src/User/BlogBundle/Controller/PageController.php

namespace User\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBlogBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('UserBlogBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('UserBlogBundle:Page:contact.html.twig');
    }
}

