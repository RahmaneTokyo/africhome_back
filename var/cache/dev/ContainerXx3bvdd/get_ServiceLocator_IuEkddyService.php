<?php

namespace ContainerXx3bvdd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IuEkddyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iuEkddy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iuEkddy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'batimentRepository' => ['privates', 'App\\Repository\\BatimentRepository', 'getBatimentRepositoryService', true],
        ], [
            'batimentRepository' => 'App\\Repository\\BatimentRepository',
        ]);
    }
}
