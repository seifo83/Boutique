<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY3zlkeM\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY3zlkeM/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerY3zlkeM.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerY3zlkeM\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerY3zlkeM\srcApp_KernelProdContainer([
    'container.build_hash' => 'Y3zlkeM',
    'container.build_id' => 'b6c244c6',
    'container.build_time' => 1583336057,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY3zlkeM');