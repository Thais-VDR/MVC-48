<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda64f4628ecdfea886e7370e5299e957
{
    public static $files = array (
        '5a22c2f72db786f9061941bce642e36f' => __DIR__ . '/../..' . '/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda64f4628ecdfea886e7370e5299e957::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda64f4628ecdfea886e7370e5299e957::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda64f4628ecdfea886e7370e5299e957::$classMap;

        }, null, ClassLoader::class);
    }
}