<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSk01TSx/getDebug_ArgumentResolver_UidService.php
namespace ContainerSk01TSx;

========
namespace ContainerGbrUjXH;
>>>>>>>> f9e4ba75 (Modification des coordonnées User réussi + Ajout du JS pour les erreurs):var/cache/dev/ContainerGbrUjXH/getDebug_ArgumentResolver_UidService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ArgumentResolver_UidService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.argument_resolver.uid' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'UidValueResolver.php';

        return $container->privates['debug.argument_resolver.uid'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\UidValueResolver(), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
