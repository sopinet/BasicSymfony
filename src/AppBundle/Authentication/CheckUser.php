<?php
namespace AppBundle\Authentication;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
        // Comprobamos si hay datos por rellenar
        /*
        $user = $this->container->get('security.context')->getToken()->getUser();
        $ubs = $user->getUserBabies();
        foreach($ubs as $ub) {
            if (($ub->getCan() == 'owner') && ($ub->getBaby()->getCountry() == null) && ($ub->getBaby()->getUser()->getId() == $user->getId())) {
                $response = new RedirectResponse($this->router->generate('panel_initial'));
                return $response;
            }
        }
        */
        #$response = new RedirectResponse($this->router->generate('panel'));
        #return $response;
    }
}
?>