<?php

namespace Application\Sopinet\UserBundle\Admin;

use Sopinet\UserBundle\Admin\Model\BaseUserAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Application\Sopinet\UserBundle\Entity\User;

class UserAdmin extends BaseUserAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);

        $formMapper
            ->with('YourAppName')
            //->add('customField')
            // ...
            ->end()
        ;
    }
}
