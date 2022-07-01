<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit783626e517fc2ce2e8cea88101d852e2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doshu\\LaravelDatatable\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doshu\\LaravelDatatable\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit783626e517fc2ce2e8cea88101d852e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit783626e517fc2ce2e8cea88101d852e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit783626e517fc2ce2e8cea88101d852e2::$classMap;

        }, null, ClassLoader::class);
    }
}
