<?php

namespace Container7w8xAiK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_OptionsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.openapi.options' shared service.
     *
     * @return \ApiPlatform\Core\OpenApi\Options
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.openapi.options'] = new \ApiPlatform\Core\OpenApi\Options('', '', '0.0.0', false, 'oauth2', 'application', '', '', '', [], [], NULL, NULL, NULL, NULL, NULL, NULL);
    }
}
