<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJzE9qXy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJzE9qXy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJzE9qXy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJzE9qXy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJzE9qXy\App_KernelDevDebugContainer([
    'container.build_hash' => 'JzE9qXy',
    'container.build_id' => 'f02788bf',
    'container.build_time' => 1651157616,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJzE9qXy');
