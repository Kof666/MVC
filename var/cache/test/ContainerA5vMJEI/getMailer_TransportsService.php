<?php

namespace ContainerA5vMJEI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.transports' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Transports
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';

        $a = ($container->privates['mailer.transport_factory'] ?? $container->load('getMailer_TransportFactoryService'));

        if (isset($container->privates['mailer.transports'])) {
            return $container->privates['mailer.transports'];
        }

        return $container->privates['mailer.transports'] = $a->fromStrings(['main' => $container->getEnv('MAILER_DSN')]);
    }
}
