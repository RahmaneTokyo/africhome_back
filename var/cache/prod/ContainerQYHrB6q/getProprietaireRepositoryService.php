<?php

namespace ContainerQYHrB6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProprietaireRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProprietaireRepository' shared autowired service.
     *
     * @return \App\Repository\ProprietaireRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProprietaireRepository'] = new \App\Repository\ProprietaireRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
