<?php

<<<<<<<< HEAD:var/cache/dev/ContainerIyGap9Z/getDataCollector_Request_SessionCollectorService.php
namespace ContainerIyGap9Z;
========
namespace ContainerXTAqN1E;

>>>>>>>> bb7cf4e46858556b526425818018d31f9181e790:var/cache/dev/ContainerXTAqN1E/getDataCollector_Request_SessionCollectorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataCollector_Request_SessionCollectorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'data_collector.request.session_collector' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['data_collector.request.session_collector'] = ($container->privates['data_collector.request'] ?? $container->getDataCollector_RequestService())->collectSessionUsage(...);
    }
}
