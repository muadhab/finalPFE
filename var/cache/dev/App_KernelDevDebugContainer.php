<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNNYvoRC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNNYvoRC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNNYvoRC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNNYvoRC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNNYvoRC\App_KernelDevDebugContainer([
    'container.build_hash' => 'NNYvoRC',
    'container.build_id' => '41e1e20d',
    'container.build_time' => 1655297823,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNNYvoRC');
