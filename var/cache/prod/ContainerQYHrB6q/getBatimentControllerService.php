<?php

namespace ContainerQYHrB6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatimentControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\BatimentController' shared autowired service.
     *
     * @return \App\Controller\BatimentController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\BatimentController'] = $instance = new \App\Controller\BatimentController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\BatimentController', $container));

        return $instance;
    }
}
