<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD8nRBQO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD8nRBQO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD8nRBQO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD8nRBQO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerD8nRBQO\App_KernelDevDebugContainer([
    'container.build_hash' => 'D8nRBQO',
    'container.build_id' => 'a8be82fa',
    'container.build_time' => 1715978271,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD8nRBQO');
