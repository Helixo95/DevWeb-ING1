<?php

<<<<<<<< HEAD:var/cache/dev/ContainerIyGap9Z/getMessenger_Failure_SendFailedMessageToFailureTransportListenerService.php
namespace ContainerIyGap9Z;
========
namespace ContainerXTAqN1E;

>>>>>>>> bb7cf4e46858556b526425818018d31f9181e790:var/cache/dev/ContainerXTAqN1E/getMessenger_Failure_SendFailedMessageToFailureTransportListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Failure_SendFailedMessageToFailureTransportListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.failure.send_failed_message_to_failure_transport_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SendFailedMessageToFailureTransportListener.php';

        return $container->privates['messenger.failure.send_failed_message_to_failure_transport_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'async' => '?',
            'failed' => '?',
        ]), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
    }
}
