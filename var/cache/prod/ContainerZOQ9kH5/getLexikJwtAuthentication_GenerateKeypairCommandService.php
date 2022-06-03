<?php

namespace ContainerZOQ9kH5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_GenerateKeypairCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'lexik_jwt_authentication.generate_keypair_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['lexik_jwt_authentication.generate_keypair_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), $container->getEnv('resolve:JWT_SECRET_KEY'), $container->getEnv('resolve:JWT_PUBLIC_KEY'), $container->getEnv('JWT_PASSPHRASE'), 'RS256');

        $instance->setName('lexik:jwt:generate-keypair');

        return $instance;
    }
}
