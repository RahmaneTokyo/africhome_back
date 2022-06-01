<?php

namespace ContainerJWZ6NlE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatimentPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\BatimentPersister' shared autowired service.
     *
     * @return \App\DataPersister\BatimentPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'BatimentPersister.php';

        return $container->privates['App\\DataPersister\\BatimentPersister'] = new \App\DataPersister\BatimentPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Repository\\BatimentRepository'] ?? $container->load('getBatimentRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\EntiteRepository'] ?? $container->load('getEntiteRepositoryService')), ($container->privates['App\\Repository\\TypeEntiteRepository'] ?? $container->load('getTypeEntiteRepositoryService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
