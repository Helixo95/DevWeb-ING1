<?php

namespace ContainerJ7csWvQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AccessListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMap.php';

        $a = ($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService());

        if (isset($container->privates['security.access_listener'])) {
            return $container->privates['security.access_listener'];
        }

        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), $a, ($container->privates['security.access_map'] ?? ($container->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), false);
    }
}
