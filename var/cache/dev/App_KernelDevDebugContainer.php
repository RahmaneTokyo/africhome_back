<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\Container2RkelAV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2RkelAV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2RkelAV.legacy');
=======
if (\class_exists(\Container1QFXIao\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1QFXIao/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1QFXIao.legacy');
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\Container2RkelAV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2RkelAV\App_KernelDevDebugContainer([
    'container.build_hash' => '2RkelAV',
    'container.build_id' => '092422c5',
    'container.build_time' => 1655826527,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2RkelAV');
=======
    \class_alias(\Container1QFXIao\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1QFXIao\App_KernelDevDebugContainer([
    'container.build_hash' => '1QFXIao',
    'container.build_id' => '94ab3831',
    'container.build_time' => 1654260378,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1QFXIao');
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
