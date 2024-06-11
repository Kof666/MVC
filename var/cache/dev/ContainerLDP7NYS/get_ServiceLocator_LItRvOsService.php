<?php

namespace ContainerLDP7NYS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LItRvOsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lItRvOs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lItRvOs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Card21Controller::bankHand21Post' => ['privates', '.service_locator.1e5Dwzp', 'get_ServiceLocator_1e5DwzpService', true],
            'App\\Controller\\Card21Controller::home21' => ['privates', '.service_locator.G2Pzb5Q', 'get_ServiceLocator_G2Pzb5QService', true],
            'App\\Controller\\Card21Controller::newRound21' => ['privates', '.service_locator.AOJEo.j', 'get_ServiceLocator_AOJEo_JService', true],
            'App\\Controller\\Card21Controller::playerHand21Get' => ['privates', '.service_locator.WmzxBAr', 'get_ServiceLocator_WmzxBArService', true],
            'App\\Controller\\Card21Controller::playerHand21Post' => ['privates', '.service_locator.IqB0Pan', 'get_ServiceLocator_IqB0PanService', true],
            'App\\Controller\\Card21Controller::surface' => ['privates', '.service_locator.Rsw7ROE', 'get_ServiceLocator_Rsw7ROEService', true],
            'App\\Controller\\LibraryController::createLibrary' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController::deleteLibraryById' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController::reset' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController::updateLibraryGet' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryController::updateLibraryPost' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController::viewAllLibrary' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryController::viewLibraryById' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryControllerJson::findByIsbn' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryControllerJson::showAllBooks' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Card21Controller:bankHand21Post' => ['privates', '.service_locator.1e5Dwzp', 'get_ServiceLocator_1e5DwzpService', true],
            'App\\Controller\\Card21Controller:home21' => ['privates', '.service_locator.G2Pzb5Q', 'get_ServiceLocator_G2Pzb5QService', true],
            'App\\Controller\\Card21Controller:newRound21' => ['privates', '.service_locator.AOJEo.j', 'get_ServiceLocator_AOJEo_JService', true],
            'App\\Controller\\Card21Controller:playerHand21Get' => ['privates', '.service_locator.WmzxBAr', 'get_ServiceLocator_WmzxBArService', true],
            'App\\Controller\\Card21Controller:playerHand21Post' => ['privates', '.service_locator.IqB0Pan', 'get_ServiceLocator_IqB0PanService', true],
            'App\\Controller\\Card21Controller:surface' => ['privates', '.service_locator.Rsw7ROE', 'get_ServiceLocator_Rsw7ROEService', true],
            'App\\Controller\\LibraryController:createLibrary' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController:deleteLibraryById' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController:reset' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController:updateLibraryGet' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryController:updateLibraryPost' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\LibraryController:viewAllLibrary' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryController:viewLibraryById' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryControllerJson:findByIsbn' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'App\\Controller\\LibraryControllerJson:showAllBooks' => ['privates', '.service_locator.mFXXG35', 'get_ServiceLocator_MFXXG35Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Card21Controller::bankHand21Post' => '?',
            'App\\Controller\\Card21Controller::home21' => '?',
            'App\\Controller\\Card21Controller::newRound21' => '?',
            'App\\Controller\\Card21Controller::playerHand21Get' => '?',
            'App\\Controller\\Card21Controller::playerHand21Post' => '?',
            'App\\Controller\\Card21Controller::surface' => '?',
            'App\\Controller\\LibraryController::createLibrary' => '?',
            'App\\Controller\\LibraryController::deleteLibraryById' => '?',
            'App\\Controller\\LibraryController::reset' => '?',
            'App\\Controller\\LibraryController::updateLibraryGet' => '?',
            'App\\Controller\\LibraryController::updateLibraryPost' => '?',
            'App\\Controller\\LibraryController::viewAllLibrary' => '?',
            'App\\Controller\\LibraryController::viewLibraryById' => '?',
            'App\\Controller\\LibraryControllerJson::findByIsbn' => '?',
            'App\\Controller\\LibraryControllerJson::showAllBooks' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Card21Controller:bankHand21Post' => '?',
            'App\\Controller\\Card21Controller:home21' => '?',
            'App\\Controller\\Card21Controller:newRound21' => '?',
            'App\\Controller\\Card21Controller:playerHand21Get' => '?',
            'App\\Controller\\Card21Controller:playerHand21Post' => '?',
            'App\\Controller\\Card21Controller:surface' => '?',
            'App\\Controller\\LibraryController:createLibrary' => '?',
            'App\\Controller\\LibraryController:deleteLibraryById' => '?',
            'App\\Controller\\LibraryController:reset' => '?',
            'App\\Controller\\LibraryController:updateLibraryGet' => '?',
            'App\\Controller\\LibraryController:updateLibraryPost' => '?',
            'App\\Controller\\LibraryController:viewAllLibrary' => '?',
            'App\\Controller\\LibraryController:viewLibraryById' => '?',
            'App\\Controller\\LibraryControllerJson:findByIsbn' => '?',
            'App\\Controller\\LibraryControllerJson:showAllBooks' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}