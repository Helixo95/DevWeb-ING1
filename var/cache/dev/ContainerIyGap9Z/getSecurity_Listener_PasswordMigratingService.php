<?php

<<<<<<<< HEAD:var/cache/dev/ContainerIyGap9Z/getSecurity_Listener_PasswordMigratingService.php
namespace ContainerIyGap9Z;
========
namespace ContainerXTAqN1E;

>>>>>>>> bb7cf4e46858556b526425818018d31f9181e790:var/cache/dev/ContainerXTAqN1E/getSecurity_Listener_PasswordMigratingService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_PasswordMigratingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.password_migrating' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PasswordMigratingListener.php';

        return $container->privates['security.listener.password_migrating'] = new \Symfony\Component\Security\Http\EventListener\PasswordMigratingListener(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
