<?php

namespace ContainerLDP7NYS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AOJEo_JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AOJEo.j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AOJEo.j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'session' => ['privates', '.errored.ReU0UdJ', NULL, 'Cannot determine controller argument for "App\\Controller\\Card21Controller::newRound21()": the $session argument is type-hinted with the non-existent class or interface: "App\\Controller\\SessionInterface". Did you forget to add a use statement?'],
        ], [
            'session' => '?',
        ]);
    }
}
