<?php

namespace Application\Sonata\UserBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\UserBundle\Admin\Model\GroupAdmin as BaseGroupAdmin;

class GroupAdmin extends BaseGroupAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);

        $formMapper
            ->with('customApp')
            //->add('custom1')
            // ...
            ->end()
        ;
    }
}
