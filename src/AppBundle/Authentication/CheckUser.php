<?php
namespace AppBundle\Authentication;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;

class CheckUser implements AuthenticationSuccessHandlerInterface
{
    protected $router;
    protected $container;

    public function __construct($container, Router $router)
    {
        $this->router = $router;
        $this->container = $container;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {

    }
}
?>