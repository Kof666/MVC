<?php

namespace ContainerA5vMJEI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_MessengerTransportListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.messenger_transport_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessengerTransportListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessengerTransportListener.php';

        return $container->privates['mailer.messenger_transport_listener'] = new \Symfony\Component\Mailer\EventListener\MessengerTransportListener();
    }
}
