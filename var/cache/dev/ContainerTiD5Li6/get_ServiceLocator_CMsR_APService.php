<?php

namespace ContainerTiD5Li6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CMsR_APService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CMsR.AP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CMsR.AP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entiteRepository' => ['privates', 'App\\Repository\\EntiteRepository', 'getEntiteRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'entiteRepository' => 'App\\Repository\\EntiteRepository',
            'security' => '?',
        ]);
    }
}
