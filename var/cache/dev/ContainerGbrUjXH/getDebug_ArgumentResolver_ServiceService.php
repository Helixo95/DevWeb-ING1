<?php

<<<<<<<< HEAD:var/cache/dev/ContainerGbrUjXH/getDebug_ArgumentResolver_ServiceService.php
namespace ContainerGbrUjXH;
========
namespace ContainerSbXbQba;

>>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645:var/cache/dev/ContainerSbXbQba/getDebug_ArgumentResolver_ServiceService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ArgumentResolver_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'ServiceValueResolver.php';

<<<<<<<< HEAD:var/cache/dev/ContainerGbrUjXH/getDebug_ArgumentResolver_ServiceService.php
        $a = ($container->privates['.service_locator.WfQRYoZ'] ?? $container->load('get_ServiceLocator_WfQRYoZService'));
========
        $a = ($container->privates['.service_locator.bBVtGRl'] ?? $container->load('get_ServiceLocator_BBVtGRlService'));
>>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645:var/cache/dev/ContainerSbXbQba/getDebug_ArgumentResolver_ServiceService.php

        if (isset($container->privates['debug.argument_resolver.service'])) {
            return $container->privates['debug.argument_resolver.service'];
        }

        return $container->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver($a), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
