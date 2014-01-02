<?php

// src/User/BlogBundle/Listener/ArticleListener.php
namespace User\BlogBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use User\BlogBundle\Entity\Article;

class ArticleListener
{
	protected $security;
	
	public function __construct($security){

		$this->security = $security;

	}
	public function prePersist(LifecycleEventArgs $args){
		$entity = $args->getObject();
		//$entityManager = $args->getEntityManager();

		//agir seulement sur Article
		if ($entity instanceof Article) {
			$entity->setTitle('lol');
		}
	}
}