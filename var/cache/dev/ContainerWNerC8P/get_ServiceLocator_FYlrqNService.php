<?php

namespace ContainerWNerC8P;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FYlrqNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FYlrq_N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FYlrq_N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'contactRepository' => 'App\\Repository\\ContactRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
