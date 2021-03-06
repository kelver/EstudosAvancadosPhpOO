<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19374945ca3170297165fc5a0a878379
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19374945ca3170297165fc5a0a878379::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19374945ca3170297165fc5a0a878379::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit19374945ca3170297165fc5a0a878379::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
