<?php

<<<<<<<< HEAD:var/cache/dev/ContainerTKvOi1f/getContainer_GetenvService.php
namespace ContainerTKvOi1f;

========
namespace ContainerEUG0bel;
>>>>>>>> f9e4ba75 (Modification des coordonnées User réussi + Ajout du JS pour les erreurs):var/cache/dev/ContainerEUG0bel/getContainer_GetenvService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetenvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'container.getenv' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['container.getenv'] = $container->getEnv(...);
    }
}
