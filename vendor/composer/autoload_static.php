<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04b8c45acc73f7ad064dbe0f5d98bf9b
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04b8c45acc73f7ad064dbe0f5d98bf9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04b8c45acc73f7ad064dbe0f5d98bf9b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}