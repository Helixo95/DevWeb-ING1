<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5g8tSVp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5g8tSVp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5g8tSVp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5g8tSVp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5g8tSVp\App_KernelDevDebugContainer([
    'container.build_hash' => '5g8tSVp',
    'container.build_id' => '34e74b89',
    'container.build_time' => 1714323952,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5g8tSVp');
