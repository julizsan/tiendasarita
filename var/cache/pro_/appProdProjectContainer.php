<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNquzaqb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNquzaqb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerNquzaqb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerNquzaqb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerNquzaqb\appProdProjectContainer([
    'container.build_hash' => 'Nquzaqb',
    'container.build_id' => '48a9992b',
    'container.build_time' => 1634680429,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNquzaqb');