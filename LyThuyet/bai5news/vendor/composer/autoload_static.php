<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e4c364d7cd66d3ea6e8c10361ccc283
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e4c364d7cd66d3ea6e8c10361ccc283::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e4c364d7cd66d3ea6e8c10361ccc283::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e4c364d7cd66d3ea6e8c10361ccc283::$classMap;

        }, null, ClassLoader::class);
    }
}