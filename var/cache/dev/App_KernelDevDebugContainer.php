<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1QFXIao\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1QFXIao/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1QFXIao.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1QFXIao\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1QFXIao\App_KernelDevDebugContainer([
    'container.build_hash' => '1QFXIao',
    'container.build_id' => '94ab3831',
    'container.build_time' => 1654260378,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1QFXIao');
