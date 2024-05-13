<?php

namespace Container2n8F5RC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Security/SecurityVoter.php';

        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $container->getAuthorizationCheckerService());

        if (isset($container->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'])) {
            return $container->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'])) {
            return $container->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'];
        }

        return $container->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter($a, ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService())), $b);
    }
}
