<?php

<<<<<<<< HEAD:var/cache/dev/ContainerIyGap9Z/getTranslation_Loader_MoService.php
namespace ContainerIyGap9Z;
========
namespace ContainerXTAqN1E;

>>>>>>>> bb7cf4e46858556b526425818018d31f9181e790:var/cache/dev/ContainerXTAqN1E/getTranslation_Loader_MoService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Loader_MoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ArrayLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'MoFileLoader.php';

        return $container->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
}
