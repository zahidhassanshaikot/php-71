<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ccd6b65745310b6d5557fda2b91d25c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ccd6b65745310b6d5557fda2b91d25c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ccd6b65745310b6d5557fda2b91d25c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
