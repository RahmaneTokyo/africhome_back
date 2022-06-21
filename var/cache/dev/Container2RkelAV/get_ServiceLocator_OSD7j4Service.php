<?php

namespace Container2RkelAV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OSD7j4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oSD7j_4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oSD7j_4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entiteRepository' => ['privates', 'App\\Repository\\EntiteRepository', 'getEntiteRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'requestStack' => ['services', 'request_stack', 'getRequestStackService', false],
        ], [
            'entiteRepository' => 'App\\Repository\\EntiteRepository',
            'manager' => '?',
            'requestStack' => '?',
        ]);
    }
}