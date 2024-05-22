<?php

namespace ContainerSmA2Fjv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CBBq8aIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CBBq8aI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CBBq8aI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminController::dashboard' => ['privates', '.service_locator.HIhw834', 'get_ServiceLocator_HIhw834Service', true],
            'App\\Controller\\Admin\\AdminCreateController::createProduct' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\AdminProductController::delete' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\Admin\\AdminProductController::editProduct' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\AdminProductsController::index' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\Admin\\AdminUserController::changeRole' => ['privates', '.service_locator.S.D1AES', 'get_ServiceLocator_S_D1AESService', true],
            'App\\Controller\\Admin\\AdminUserController::changeStatus' => ['privates', '.service_locator.S.D1AES', 'get_ServiceLocator_S_D1AESService', true],
            'App\\Controller\\Admin\\AdminUserController::index' => ['privates', '.service_locator.ooXb._G', 'get_ServiceLocator_OoXb_GService', true],
            'App\\Controller\\Admin\\AdminUsersController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\CartController::cart_Add' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController::cart_Min' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController::cart_register' => ['privates', '.service_locator.OW8jEgK', 'get_ServiceLocator_OW8jEgKService', true],
            'App\\Controller\\CartController::cart_remove' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.RLfR8Ds', 'get_ServiceLocator_RLfR8DsService', true],
            'App\\Controller\\HomeController::home' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::add_cart' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::add_cart2' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::categoryBrand' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProfileModifController::edit' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\AdminController:dashboard' => ['privates', '.service_locator.HIhw834', 'get_ServiceLocator_HIhw834Service', true],
            'App\\Controller\\Admin\\AdminCreateController:createProduct' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\AdminProductController:delete' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\Admin\\AdminProductController:editProduct' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\AdminProductsController:index' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\Admin\\AdminUserController:changeRole' => ['privates', '.service_locator.S.D1AES', 'get_ServiceLocator_S_D1AESService', true],
            'App\\Controller\\Admin\\AdminUserController:changeStatus' => ['privates', '.service_locator.S.D1AES', 'get_ServiceLocator_S_D1AESService', true],
            'App\\Controller\\Admin\\AdminUserController:index' => ['privates', '.service_locator.ooXb._G', 'get_ServiceLocator_OoXb_GService', true],
            'App\\Controller\\Admin\\AdminUsersController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\CartController:cart_Add' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController:cart_Min' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController:cart_register' => ['privates', '.service_locator.OW8jEgK', 'get_ServiceLocator_OW8jEgKService', true],
            'App\\Controller\\CartController:cart_remove' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.RLfR8Ds', 'get_ServiceLocator_RLfR8DsService', true],
            'App\\Controller\\HomeController:home' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:add_cart' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:add_cart2' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:categoryBrand' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProfileModifController:edit' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\AdminController::dashboard' => '?',
            'App\\Controller\\Admin\\AdminCreateController::createProduct' => '?',
            'App\\Controller\\Admin\\AdminProductController::delete' => '?',
            'App\\Controller\\Admin\\AdminProductController::editProduct' => '?',
            'App\\Controller\\Admin\\AdminProductsController::index' => '?',
            'App\\Controller\\Admin\\AdminUserController::changeRole' => '?',
            'App\\Controller\\Admin\\AdminUserController::changeStatus' => '?',
            'App\\Controller\\Admin\\AdminUserController::index' => '?',
            'App\\Controller\\Admin\\AdminUsersController::index' => '?',
            'App\\Controller\\CartController::cart_Add' => '?',
            'App\\Controller\\CartController::cart_Min' => '?',
            'App\\Controller\\CartController::cart_register' => '?',
            'App\\Controller\\CartController::cart_remove' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\HomeController::home' => '?',
            'App\\Controller\\ProductController::add_cart' => '?',
            'App\\Controller\\ProductController::add_cart2' => '?',
            'App\\Controller\\ProductController::categoryBrand' => '?',
            'App\\Controller\\ProfileModifController::edit' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\AdminController:dashboard' => '?',
            'App\\Controller\\Admin\\AdminCreateController:createProduct' => '?',
            'App\\Controller\\Admin\\AdminProductController:delete' => '?',
            'App\\Controller\\Admin\\AdminProductController:editProduct' => '?',
            'App\\Controller\\Admin\\AdminProductsController:index' => '?',
            'App\\Controller\\Admin\\AdminUserController:changeRole' => '?',
            'App\\Controller\\Admin\\AdminUserController:changeStatus' => '?',
            'App\\Controller\\Admin\\AdminUserController:index' => '?',
            'App\\Controller\\Admin\\AdminUsersController:index' => '?',
            'App\\Controller\\CartController:cart_Add' => '?',
            'App\\Controller\\CartController:cart_Min' => '?',
            'App\\Controller\\CartController:cart_register' => '?',
            'App\\Controller\\CartController:cart_remove' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\HomeController:home' => '?',
            'App\\Controller\\ProductController:add_cart' => '?',
            'App\\Controller\\ProductController:add_cart2' => '?',
            'App\\Controller\\ProductController:categoryBrand' => '?',
            'App\\Controller\\ProfileModifController:edit' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
