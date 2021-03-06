<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18/12/13
 * Time: 10:23
 */

// src/User/BlogBundle/Admin/ArticleAdmin.php

namespace User\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class ArticleAdmin extends Admin
{
//liste des champs modifiables dans l'edit
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('title')
                ->add('article')
                ->add('price')
                ->add('image')
                ->add('quantity', 'choice', array(
                'choices' => array('100gr' =>'100gr', '200gr' => '200gr', '300gr' => '300gr')
                ))
            ->end()
        ;
    }

//liste des champs qui seront visibles dans la liste des enregistrements
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('article')
            ->add('price')
            ->add('image')
            ->add('_action', 'actions', array(
                    'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

//liste des champs qui pourraient servir à trier les enregistrements dans la liste des enregistrements
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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
    // champs visibles dans show
    protected function configureShowField(ShowMapper $show)
    {
        $show
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
}
