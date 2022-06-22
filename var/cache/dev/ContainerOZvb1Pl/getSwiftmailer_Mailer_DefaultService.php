<?php

namespace ContainerOZvb1Pl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'swiftmailer'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'classes'.\DIRECTORY_SEPARATOR.'Swift'.\DIRECTORY_SEPARATOR.'Mailer.php';

        return $container->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($container->services['swiftmailer.transport'] ?? $container->load('getSwiftmailer_TransportService')));
    }
}
