<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd795693318475626bb4e2a9ebff8ccb
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Interfaces\\' => 11,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
        'A' => 
        array (
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Interfaces',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controller',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Api',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd795693318475626bb4e2a9ebff8ccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd795693318475626bb4e2a9ebff8ccb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
