<?php

namespace ContainerG9jxB2J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_Doctrine_EventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'turbo.doctrine.event_listener' shared service.
     *
     * @return \Symfony\UX\Turbo\Doctrine\BroadcastListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'BroadcastListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Broadcaster'.\DIRECTORY_SEPARATOR.'BroadcasterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Broadcaster'.\DIRECTORY_SEPARATOR.'TwigBroadcaster.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Broadcaster'.\DIRECTORY_SEPARATOR.'ImuxBroadcaster.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Broadcaster'.\DIRECTORY_SEPARATOR.'IdAccessor.php';

        return $container->privates['turbo.doctrine.event_listener'] = new \Symfony\UX\Turbo\Doctrine\BroadcastListener(new \Symfony\UX\Turbo\Broadcaster\TwigBroadcaster(new \Symfony\UX\Turbo\Broadcaster\ImuxBroadcaster(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)), ($container->privates['twig'] ?? $container->getTwigService()), ['App\\Entity\\' => 'broadcast/'], new \Symfony\UX\Turbo\Broadcaster\IdAccessor(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ($container->services['doctrine'] ?? $container->getDoctrineService()))), NULL);
    }
}
