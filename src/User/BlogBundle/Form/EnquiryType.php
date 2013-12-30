<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 30/12/13
 * Time: 16:29
 */
// src/User/BlogBundle/Form/EnquiryType.php

namespace User\BlogBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('subject');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}