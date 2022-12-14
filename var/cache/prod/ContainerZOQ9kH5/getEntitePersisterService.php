<?php

namespace ContainerZOQ9kH5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntitePersisterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\DataPersister\EntitePersister' shared autowired service.
     *
     * @return \App\DataPersister\EntitePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\DataPersister\\EntitePersister'] = new \App\DataPersister\EntitePersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\EntiteRepository'] ?? $container->load('getEntiteRepositoryService')), ($container->privates['App\\Repository\\TypeEntiteRepository'] ?? $container->load('getTypeEntiteRepositoryService')));
    }
}
