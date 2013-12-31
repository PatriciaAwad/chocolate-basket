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
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity
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
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $article;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $price;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    protected $image;

    /**
     * @var boolean
     *
     * @ORM\Column(name="add", type="boolean")
     */
    private $add;


    /**
     * @param string $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param boolean $add
     *
     */
    public function setAdd($add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAdd()
    {
        return $this->add;
    }

} 