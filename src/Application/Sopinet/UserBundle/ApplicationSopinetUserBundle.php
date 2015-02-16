<?php

namespace Application\Sopinet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSopinetUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SopinetUserBundle';
    }
}
