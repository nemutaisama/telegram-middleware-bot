<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit957cd0303ba13574bb16617e1f5e6490
{
    public static $files = array (
        '9c67151ae59aff4788964ce8eb2a0f43' => __DIR__ . '/..' . '/clue/stream-filter/src/functions_include.php',
        '8cff32064859f4559445b89279f3199c' => __DIR__ . '/..' . '/php-http/message/src/filters.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
        ),
        'H' => 
        array (
            'Http\\Message\\' => 13,
        ),
        'C' => 
        array (
            'Clue\\StreamFilter\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message/src',
            1 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'Clue\\StreamFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/stream-filter/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit957cd0303ba13574bb16617e1f5e6490::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit957cd0303ba13574bb16617e1f5e6490::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}