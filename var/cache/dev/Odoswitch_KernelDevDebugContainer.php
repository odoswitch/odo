<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX7Asdus\Odoswitch_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX7Asdus/Odoswitch_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX7Asdus.legacy');

    return;
}

if (!\class_exists(Odoswitch_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX7Asdus\Odoswitch_KernelDevDebugContainer::class, Odoswitch_KernelDevDebugContainer::class, false);
}

return new \ContainerX7Asdus\Odoswitch_KernelDevDebugContainer([
    'container.build_hash' => 'X7Asdus',
    'container.build_id' => '9e74dc66',
    'container.build_time' => 1721086557,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX7Asdus');
