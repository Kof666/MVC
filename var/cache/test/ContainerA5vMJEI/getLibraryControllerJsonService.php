<?php

namespace ContainerA5vMJEI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLibraryControllerJsonService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\LibraryControllerJson' shared autowired service.
     *
     * @return \App\Controller\LibraryControllerJson
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LibraryControllerJson.php';

        $container->services['App\\Controller\\LibraryControllerJson'] = $instance = new \App\Controller\LibraryControllerJson();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\LibraryControllerJson', $container));

        return $instance;
    }
}
