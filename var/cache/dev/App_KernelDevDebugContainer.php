<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ7csWvQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ7csWvQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ7csWvQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ7csWvQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJ7csWvQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'J7csWvQ',
    'container.build_id' => '3495a1c3',
    'container.build_time' => 1716359924,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ7csWvQ');
