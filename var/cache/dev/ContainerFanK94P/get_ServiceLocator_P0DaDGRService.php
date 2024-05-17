<?php

namespace ContainerFanK94P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P0DaDGRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P0DaDGR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P0DaDGR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::cart_Add' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController::cart_Min' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController::cart_register' => ['privates', '.service_locator.OW8jEgK', 'get_ServiceLocator_OW8jEgKService', true],
            'App\\Controller\\CartController::cart_remove' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.RLfR8Ds', 'get_ServiceLocator_RLfR8DsService', true],
            'App\\Controller\\ProductController::add_cart' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::add_cart2' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::categoryBrand' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CartController:cart_Add' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController:cart_Min' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController:cart_register' => ['privates', '.service_locator.OW8jEgK', 'get_ServiceLocator_OW8jEgKService', true],
            'App\\Controller\\CartController:cart_remove' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.RLfR8Ds', 'get_ServiceLocator_RLfR8DsService', true],
            'App\\Controller\\ProductController:add_cart' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:add_cart2' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:categoryBrand' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CartController::cart_Add' => '?',
            'App\\Controller\\CartController::cart_Min' => '?',
            'App\\Controller\\CartController::cart_register' => '?',
            'App\\Controller\\CartController::cart_remove' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\ProductController::add_cart' => '?',
            'App\\Controller\\ProductController::add_cart2' => '?',
            'App\\Controller\\ProductController::categoryBrand' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CartController:cart_Add' => '?',
            'App\\Controller\\CartController:cart_Min' => '?',
            'App\\Controller\\CartController:cart_register' => '?',
            'App\\Controller\\CartController:cart_remove' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\ProductController:add_cart' => '?',
            'App\\Controller\\ProductController:add_cart2' => '?',
            'App\\Controller\\ProductController:categoryBrand' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
