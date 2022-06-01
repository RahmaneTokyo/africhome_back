<?php

namespace ContainerQYHrB6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatimentPersisterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\DataPersister\BatimentPersister' shared autowired service.
     *
     * @return \App\DataPersister\BatimentPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\DataPersister\\BatimentPersister'] = new \App\DataPersister\BatimentPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Repository\\BatimentRepository'] ?? $container->load('getBatimentRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\EntiteRepository'] ?? $container->load('getEntiteRepositoryService')), ($container->privates['App\\Repository\\TypeEntiteRepository'] ?? $container->load('getTypeEntiteRepositoryService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
