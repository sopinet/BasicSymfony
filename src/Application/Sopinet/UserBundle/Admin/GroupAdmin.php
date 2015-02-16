<?php

namespace Application\Sopinet\UserBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sopinet\UserBundle\Admin\Model\BaseGroupAdmin;

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