<?php

namespace ContainerZOQ9kH5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGestionnairePersisterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\DataPersister\GestionnairePersister' shared autowired service.
     *
     * @return \App\DataPersister\GestionnairePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\DataPersister\\GestionnairePersister'] = new \App\DataPersister\GestionnairePersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->privates['App\\Repository\\EntiteRepository'] ?? $container->load('getEntiteRepositoryService')));
    }
}
