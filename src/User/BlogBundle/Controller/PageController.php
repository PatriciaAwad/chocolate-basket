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
        $em = $this->getDoctrine()
            ->getManager();

        $articles = $em->createQueryBuilder()
            ->select('b')
            ->from('UserBlogBundle:Article',  'b')
           // ->addOrderBy('b.created', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('UserBlogBundle:Page:index.html.twig', array(
            'articles' => $articles
        ));
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
            $form->bind($request);

            if ($form->isValid()) {

                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from Chocolate Basket')
                    ->setFrom('enquiries@chocolate-basket.co.uk')
                    ->setTo($this->container->getParameter('user_blog.emails.contact_email'))
                    ->setBody($this->renderView('UserBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->set('user-notice', 'Your contact enquiry was successfully sent. Thank you!');

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

