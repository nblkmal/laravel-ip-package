<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe6034d9f400565101e5a7c2bb6504d7
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nblkmal\\IpGeo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nblkmal\\IpGeo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe6034d9f400565101e5a7c2bb6504d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe6034d9f400565101e5a7c2bb6504d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe6034d9f400565101e5a7c2bb6504d7::$classMap;

        }, null, ClassLoader::class);
    }
}
