<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCdfFyo6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCdfFyo6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCdfFyo6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCdfFyo6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCdfFyo6\App_KernelDevDebugContainer([
    'container.build_hash' => 'CdfFyo6',
    'container.build_id' => '8d8fa74a',
    'container.build_time' => 1715271804,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCdfFyo6');
