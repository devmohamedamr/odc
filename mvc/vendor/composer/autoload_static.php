<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40c892064c0925dfce4e250091572ce1
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Odc\\Mvc\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Odc\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit40c892064c0925dfce4e250091572ce1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40c892064c0925dfce4e250091572ce1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40c892064c0925dfce4e250091572ce1::$classMap;

        }, null, ClassLoader::class);
    }
}
