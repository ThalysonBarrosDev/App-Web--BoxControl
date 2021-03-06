<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit122cda80aaa633e8fed8c4cdd06ae04f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit122cda80aaa633e8fed8c4cdd06ae04f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit122cda80aaa633e8fed8c4cdd06ae04f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit122cda80aaa633e8fed8c4cdd06ae04f::$classMap;

        }, null, ClassLoader::class);
    }
}
