<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 31/12/13
 * Time: 12:18
 */

namespace User\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;

/**
 * Article Controller
 */
class ArticleController extends Controller
{
    /**
     * Show an article entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('UserBlogBundle:Article')->find($id);


        if (!$article) {
            throw $this->createNotFoundException('Unable to find Article post.');
        }

        return $this->render('UserBlogBundle:Article:show.html.twig', array(
            'article'      => $article,
        ));
    }
} 