<?php

namespace Container7w8xAiK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatimentOwnerRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\BatimentOwnerRepository' shared autowired service.
     *
     * @return \App\Repository\BatimentOwnerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\BatimentOwnerRepository'] = new \App\Repository\BatimentOwnerRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
