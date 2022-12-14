<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7daa1617e9ffb7f725058473d694e8b2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Utils\\' => 10,
            'App\\Models\\' => 11,
            'App\\Interface\\' => 14,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/utils',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/models',
        ),
        'App\\Interface\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/interface',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7daa1617e9ffb7f725058473d694e8b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7daa1617e9ffb7f725058473d694e8b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7daa1617e9ffb7f725058473d694e8b2::$classMap;

        }, null, ClassLoader::class);
    }
}
