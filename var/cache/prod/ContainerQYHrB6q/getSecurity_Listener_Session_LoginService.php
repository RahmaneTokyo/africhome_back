<?php

namespace ContainerQYHrB6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Session_LoginService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.session.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\SessionStrategyListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.session.login'] = new \Symfony\Component\Security\Http\EventListener\SessionStrategyListener(($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
    }
}
