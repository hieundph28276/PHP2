<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d3f0c86e6daa156a3f50fc58ec5622c
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bl\\LabAutoload\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bl\\LabAutoload\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d3f0c86e6daa156a3f50fc58ec5622c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d3f0c86e6daa156a3f50fc58ec5622c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d3f0c86e6daa156a3f50fc58ec5622c::$classMap;

        }, null, ClassLoader::class);
    }
}
