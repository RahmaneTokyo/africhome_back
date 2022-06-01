<?php

namespace Container7w8xAiK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BatimentController::addLocalisation' => ['privates', '.service_locator.62LO1d0', 'get_ServiceLocator_62LO1d0Service', true],
            'App\\Controller\\BatimentController::blockPropUser' => ['privates', '.service_locator.rJDOf44', 'get_ServiceLocator_RJDOf44Service', true],
            'App\\Controller\\BatimentController::getBatiment' => ['privates', '.service_locator.muwzajQ', 'get_ServiceLocator_MuwzajQService', true],
            'App\\Controller\\BatimentController::getBatimentOwnerEntite' => ['privates', '.service_locator.iuEkddy', 'get_ServiceLocator_IuEkddyService', true],
            'App\\Controller\\BatimentController::getBatimentOwnerUser' => ['privates', '.service_locator.iuEkddy', 'get_ServiceLocator_IuEkddyService', true],
            'App\\Controller\\BatimentController::unblockPropUser' => ['privates', '.service_locator.rJDOf44', 'get_ServiceLocator_RJDOf44Service', true],
            'App\\Controller\\EntiteController::addLocalisationEntite' => ['privates', '.service_locator.oSD7j_4', 'get_ServiceLocator_OSD7j4Service', true],
            'App\\Controller\\EntiteController::blockEntite' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\EntiteController::getEntiteFatherByType' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\EntiteController::getEntiteSon' => ['privates', '.service_locator.muwzajQ', 'get_ServiceLocator_MuwzajQService', true],
            'App\\Controller\\EntiteController::getEntitesOfAdmin' => ['privates', '.service_locator.CMsR.AP', 'get_ServiceLocator_CMsR_APService', true],
            'App\\Controller\\EntiteController::getEntitesOfGestionnaire' => ['privates', '.service_locator.CMsR.AP', 'get_ServiceLocator_CMsR_APService', true],
            'App\\Controller\\EntiteController::unblockEntite' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\UserCommonController::enterCodeConfirmation' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\UserCommonController::getEntitesAdmin' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\UserCommonController::getUserById' => ['privates', '.service_locator.iTVYPJ2', 'get_ServiceLocator_ITVYPJ2Service', true],
            'App\\Controller\\UserCommonController::getUserInfos' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\UserCommonController::requestPassword' => ['privates', '.service_locator._fOr.JJ', 'get_ServiceLocator_FOr_JJService', true],
            'App\\Controller\\UserCommonController::resetPassword' => ['privates', '.service_locator.hdrCzai', 'get_ServiceLocator_HdrCzaiService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\BatimentController:addLocalisation' => ['privates', '.service_locator.62LO1d0', 'get_ServiceLocator_62LO1d0Service', true],
            'App\\Controller\\BatimentController:blockPropUser' => ['privates', '.service_locator.rJDOf44', 'get_ServiceLocator_RJDOf44Service', true],
            'App\\Controller\\BatimentController:getBatiment' => ['privates', '.service_locator.muwzajQ', 'get_ServiceLocator_MuwzajQService', true],
            'App\\Controller\\BatimentController:getBatimentOwnerEntite' => ['privates', '.service_locator.iuEkddy', 'get_ServiceLocator_IuEkddyService', true],
            'App\\Controller\\BatimentController:getBatimentOwnerUser' => ['privates', '.service_locator.iuEkddy', 'get_ServiceLocator_IuEkddyService', true],
            'App\\Controller\\BatimentController:unblockPropUser' => ['privates', '.service_locator.rJDOf44', 'get_ServiceLocator_RJDOf44Service', true],
            'App\\Controller\\EntiteController:addLocalisationEntite' => ['privates', '.service_locator.oSD7j_4', 'get_ServiceLocator_OSD7j4Service', true],
            'App\\Controller\\EntiteController:blockEntite' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\EntiteController:getEntiteFatherByType' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\EntiteController:getEntiteSon' => ['privates', '.service_locator.muwzajQ', 'get_ServiceLocator_MuwzajQService', true],
            'App\\Controller\\EntiteController:getEntitesOfAdmin' => ['privates', '.service_locator.CMsR.AP', 'get_ServiceLocator_CMsR_APService', true],
            'App\\Controller\\EntiteController:getEntitesOfGestionnaire' => ['privates', '.service_locator.CMsR.AP', 'get_ServiceLocator_CMsR_APService', true],
            'App\\Controller\\EntiteController:unblockEntite' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\UserCommonController:enterCodeConfirmation' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\UserCommonController:getEntitesAdmin' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\UserCommonController:getUserById' => ['privates', '.service_locator.iTVYPJ2', 'get_ServiceLocator_ITVYPJ2Service', true],
            'App\\Controller\\UserCommonController:getUserInfos' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\UserCommonController:requestPassword' => ['privates', '.service_locator._fOr.JJ', 'get_ServiceLocator_FOr_JJService', true],
            'App\\Controller\\UserCommonController:resetPassword' => ['privates', '.service_locator.hdrCzai', 'get_ServiceLocator_HdrCzaiService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\BatimentController::addLocalisation' => '?',
            'App\\Controller\\BatimentController::blockPropUser' => '?',
            'App\\Controller\\BatimentController::getBatiment' => '?',
            'App\\Controller\\BatimentController::getBatimentOwnerEntite' => '?',
            'App\\Controller\\BatimentController::getBatimentOwnerUser' => '?',
            'App\\Controller\\BatimentController::unblockPropUser' => '?',
            'App\\Controller\\EntiteController::addLocalisationEntite' => '?',
            'App\\Controller\\EntiteController::blockEntite' => '?',
            'App\\Controller\\EntiteController::getEntiteFatherByType' => '?',
            'App\\Controller\\EntiteController::getEntiteSon' => '?',
            'App\\Controller\\EntiteController::getEntitesOfAdmin' => '?',
            'App\\Controller\\EntiteController::getEntitesOfGestionnaire' => '?',
            'App\\Controller\\EntiteController::unblockEntite' => '?',
            'App\\Controller\\UserCommonController::enterCodeConfirmation' => '?',
            'App\\Controller\\UserCommonController::getEntitesAdmin' => '?',
            'App\\Controller\\UserCommonController::getUserById' => '?',
            'App\\Controller\\UserCommonController::getUserInfos' => '?',
            'App\\Controller\\UserCommonController::requestPassword' => '?',
            'App\\Controller\\UserCommonController::resetPassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BatimentController:addLocalisation' => '?',
            'App\\Controller\\BatimentController:blockPropUser' => '?',
            'App\\Controller\\BatimentController:getBatiment' => '?',
            'App\\Controller\\BatimentController:getBatimentOwnerEntite' => '?',
            'App\\Controller\\BatimentController:getBatimentOwnerUser' => '?',
            'App\\Controller\\BatimentController:unblockPropUser' => '?',
            'App\\Controller\\EntiteController:addLocalisationEntite' => '?',
            'App\\Controller\\EntiteController:blockEntite' => '?',
            'App\\Controller\\EntiteController:getEntiteFatherByType' => '?',
            'App\\Controller\\EntiteController:getEntiteSon' => '?',
            'App\\Controller\\EntiteController:getEntitesOfAdmin' => '?',
            'App\\Controller\\EntiteController:getEntitesOfGestionnaire' => '?',
            'App\\Controller\\EntiteController:unblockEntite' => '?',
            'App\\Controller\\UserCommonController:enterCodeConfirmation' => '?',
            'App\\Controller\\UserCommonController:getEntitesAdmin' => '?',
            'App\\Controller\\UserCommonController:getUserById' => '?',
            'App\\Controller\\UserCommonController:getUserInfos' => '?',
            'App\\Controller\\UserCommonController:requestPassword' => '?',
            'App\\Controller\\UserCommonController:resetPassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
