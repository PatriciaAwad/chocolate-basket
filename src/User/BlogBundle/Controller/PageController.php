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
// Import new namespaces
use User\BlogBundle\Entity\Enquiry;
use User\BlogBundle\Form\EnquiryType;


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
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('UserBlogBundle_contact'));
            }
        }

        return $this->render('UserBlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}

