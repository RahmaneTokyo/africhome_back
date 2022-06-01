<?php

namespace Container7w8xAiK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_CheckConfigCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'lexik_jwt_authentication.check_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['lexik_jwt_authentication.check_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand(($container->services['lexik_jwt_authentication.key_loader'] ?? $container->load('getLexikJwtAuthentication_KeyLoaderService')), 'RS256');

        $instance->setName('lexik:jwt:check-config');

        return $instance;
    }
}
