<?php

// src/User/BlogBundle/Form/ArticleType.php
namespace User\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('article')
            ->add('price')
            ->add('image')
            ->add('quantity', 'choice', array(
                'choices' => array('100gr' =>'100gr', '200gr' => '200gr', '300gr' => '300gr')
            ))
            ->add('add', 'checkbox', array(
            'label'     => 'Ajouter au panier',

            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'article';
    }
}
