<?php

<<<<<<<< HEAD:var/cache/dev/ContainerGbrUjXH/getSerializer_Mapping_ClassMetadataFactoryService.php
namespace ContainerGbrUjXH;
========
namespace ContainerSbXbQba;

>>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645:var/cache/dev/ContainerSbXbQba/getSerializer_Mapping_ClassMetadataFactoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_ClassMetadataFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AnnotationLoader.php';

        return $container->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(NULL)]));
    }
}
