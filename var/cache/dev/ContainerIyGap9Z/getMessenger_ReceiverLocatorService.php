<?php

<<<<<<<< HEAD:var/cache/dev/ContainerIyGap9Z/getMessenger_ReceiverLocatorService.php
namespace ContainerIyGap9Z;
========
namespace ContainerXTAqN1E;

>>>>>>>> bb7cf4e46858556b526425818018d31f9181e790:var/cache/dev/ContainerXTAqN1E/getMessenger_ReceiverLocatorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_ReceiverLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'messenger.transport.async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'async' => '?',
            'failed' => '?',
            'messenger.transport.async' => '?',
            'messenger.transport.failed' => '?',
        ]);
    }
}
