<?php

namespace ContainerWQH8kXK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_SecretsList_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.secrets_list.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.secrets_list.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('secrets:list', [], 'List all secrets', false, #[\Closure(name: 'console.command.secrets_list', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand {
            return ($container->privates['console.command.secrets_list'] ?? $container->load('getConsole_Command_SecretsListService'));
        });
    }
}
