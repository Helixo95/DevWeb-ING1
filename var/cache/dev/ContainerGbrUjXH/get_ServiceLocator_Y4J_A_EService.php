<?php

<<<<<<<< HEAD:var/cache/dev/ContainerGbrUjXH/get_ServiceLocator_Y4J_A_EService.php
namespace ContainerGbrUjXH;
========
namespace ContainerSbXbQba;

>>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645:var/cache/dev/ContainerSbXbQba/get_ServiceLocator_Y4J_A_EService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y4J_A_EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y4J.A.e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y4J.A.e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'failed' => '?',
        ]);
    }
}
