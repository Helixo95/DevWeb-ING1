<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSk01TSx/getContainer_GetRoutingConditionServiceService.php
namespace ContainerSk01TSx;

========
namespace ContainerGbrUjXH;
>>>>>>>> f9e4ba75 (Modification des coordonnées User réussi + Ajout du JS pour les erreurs):var/cache/dev/ContainerGbrUjXH/getContainer_GetRoutingConditionServiceService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetRoutingConditionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'container.get_routing_condition_service' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.get_routing_condition_service'] = ($container->privates['.service_locator.Xbsa8iG'] ?? ($container->privates['.service_locator.Xbsa8iG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], [])))->get(...);
    }
}
