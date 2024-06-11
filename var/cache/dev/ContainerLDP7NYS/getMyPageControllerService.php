<?php

namespace ContainerLDP7NYS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMyPageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MyPageController' shared autowired service.
     *
     * @return \App\Controller\MyPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MyPageController.php';

        $container->services['App\\Controller\\MyPageController'] = $instance = new \App\Controller\MyPageController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\MyPageController', $container));

        return $instance;
    }
}
