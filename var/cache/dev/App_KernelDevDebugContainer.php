<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOTvZZFd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOTvZZFd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOTvZZFd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOTvZZFd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOTvZZFd\App_KernelDevDebugContainer([
    'container.build_hash' => 'OTvZZFd',
    'container.build_id' => '7f64d468',
    'container.build_time' => 1716219358,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOTvZZFd');
