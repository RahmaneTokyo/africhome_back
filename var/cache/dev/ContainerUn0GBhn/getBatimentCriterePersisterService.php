<?php

namespace ContainerUn0GBhn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatimentCriterePersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\BatimentCriterePersister' shared autowired service.
     *
     * @return \App\DataPersister\BatimentCriterePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'BatimentCriterePersister.php';

        return $container->privates['App\\DataPersister\\BatimentCriterePersister'] = new \App\DataPersister\BatimentCriterePersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
