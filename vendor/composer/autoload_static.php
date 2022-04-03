<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e26675ce6b3a9b176e9a4cd7e305a95
{
    public static $files = array (
        'cb33ec857b83899f6c42fb40383f56c9' => __DIR__ . '/../..' . '/lib/helpers.php',
        '0eb56510451b8065d4373f228649ece2' => __DIR__ . '/../..' . '/configuration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e26675ce6b3a9b176e9a4cd7e305a95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e26675ce6b3a9b176e9a4cd7e305a95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e26675ce6b3a9b176e9a4cd7e305a95::$classMap;

        }, null, ClassLoader::class);
    }
}