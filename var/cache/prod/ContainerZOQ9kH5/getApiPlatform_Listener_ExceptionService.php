<?php

namespace ContainerZOQ9kH5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_ExceptionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.listener.exception'] = new \ApiPlatform\Core\EventListener\ExceptionListener('api_platform.action.exception', ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false, ($container->privates['exception_listener'] ?? $container->getExceptionListenerService()));
    }
}
