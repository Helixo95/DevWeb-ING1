<?php

namespace ContainerWNqEp4O;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrandServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\BrandService' shared autowired service.
     *
     * @return \App\Service\BrandService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'BrandService.php';

        return $container->privates['App\\Service\\BrandService'] = new \App\Service\BrandService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
