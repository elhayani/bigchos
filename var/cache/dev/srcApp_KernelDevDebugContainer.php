<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5hxjRZ7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5hxjRZ7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5hxjRZ7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5hxjRZ7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container5hxjRZ7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '5hxjRZ7',
    'container.build_id' => 'dc23c38a',
    'container.build_time' => 1573052378,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5hxjRZ7');