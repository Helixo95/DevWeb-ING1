<?php

<<<<<<<< HEAD:var/cache/dev/ContainerGbrUjXH/getMonolog_LoggerService.php
namespace ContainerGbrUjXH;
========
namespace ContainerSbXbQba;

>>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645:var/cache/dev/ContainerSbXbQba/getMonolog_LoggerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_LoggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($container->privates['debug.log_processor'] ?? $container->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }
}
