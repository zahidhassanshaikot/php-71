<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb68f7f4a2c63250496273862d907154
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb68f7f4a2c63250496273862d907154::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb68f7f4a2c63250496273862d907154::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
