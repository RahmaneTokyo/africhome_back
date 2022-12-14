<?php

namespace ContainerMkxQMzG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuperAdminPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\SuperAdminPersister' shared autowired service.
     *
     * @return \App\DataPersister\SuperAdminPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'SuperAdminPersister.php';

        return $container->privates['App\\DataPersister\\SuperAdminPersister'] = new \App\DataPersister\SuperAdminPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
