<?php

namespace Container1VuUKL1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_62LO1d0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.62LO1d0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.62LO1d0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'batimentRepository' => ['privates', 'App\\Repository\\BatimentRepository', 'getBatimentRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'requestStack' => ['services', 'request_stack', 'getRequestStackService', false],
        ], [
            'batimentRepository' => 'App\\Repository\\BatimentRepository',
            'manager' => '?',
            'requestStack' => '?',
        ]);
    }
}
