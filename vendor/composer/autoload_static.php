<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd1a188540ba72da62e03fc91383f16e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd1a188540ba72da62e03fc91383f16e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd1a188540ba72da62e03fc91383f16e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd1a188540ba72da62e03fc91383f16e::$classMap;

        }, null, ClassLoader::class);
    }
}