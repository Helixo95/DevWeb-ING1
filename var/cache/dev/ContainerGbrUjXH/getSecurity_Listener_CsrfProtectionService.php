<?php

<<<<<<<< HEAD:var/cache/dev/ContainerGbrUjXH/getSecurity_Listener_CsrfProtectionService.php
namespace ContainerGbrUjXH;
========
namespace ContainerSbXbQba;

>>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645:var/cache/dev/ContainerSbXbQba/getSecurity_Listener_CsrfProtectionService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CsrfProtectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.csrf_protection' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CsrfProtectionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CsrfProtectionListener.php';

        return $container->privates['security.listener.csrf_protection'] = new \Symfony\Component\Security\Http\EventListener\CsrfProtectionListener(($container->privates['security.csrf.token_manager'] ?? $container->getSecurity_Csrf_TokenManagerService()));
    }
}
