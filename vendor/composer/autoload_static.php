<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5562e9d1a8baa21034ed3a47be405289
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source/calendar',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5562e9d1a8baa21034ed3a47be405289::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5562e9d1a8baa21034ed3a47be405289::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
