<?php

namespace ContainerZOQ9kH5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RJDOf44Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.rJDOf44' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rJDOf44'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'proprietaireRepo' => ['privates', 'App\\Repository\\ProprietaireRepository', 'getProprietaireRepositoryService', true],
        ], [
            'manager' => '?',
            'proprietaireRepo' => 'App\\Repository\\ProprietaireRepository',
        ]);
    }
}
