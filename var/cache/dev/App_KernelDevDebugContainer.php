<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNQMaCKx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNQMaCKx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNQMaCKx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNQMaCKx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNQMaCKx\App_KernelDevDebugContainer([
    'container.build_hash' => 'NQMaCKx',
    'container.build_id' => '4323e9d4',
    'container.build_time' => 1716315145,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNQMaCKx');
