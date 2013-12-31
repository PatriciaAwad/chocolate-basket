<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 31/12/13
 * Time: 11:13
 */

namespace User\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Article
 * @package User\BlogBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article {

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $article;

    /**
     * @var string
     * @ORM\Column(type="string", length="20")
     */
    protected $image;
} 