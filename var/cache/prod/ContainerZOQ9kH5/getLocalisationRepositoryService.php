<?php

namespace ContainerZOQ9kH5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocalisationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LocalisationRepository' shared autowired service.
     *
     * @return \App\Repository\LocalisationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LocalisationRepository'] = new \App\Repository\LocalisationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
