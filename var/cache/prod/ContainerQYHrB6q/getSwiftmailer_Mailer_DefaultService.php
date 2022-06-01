<?php

namespace ContainerQYHrB6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_DefaultService extends App_KernelProdContainer
{
    /*
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($container->services['swiftmailer.transport'] ?? $container->load('getSwiftmailer_TransportService')));
    }
}
