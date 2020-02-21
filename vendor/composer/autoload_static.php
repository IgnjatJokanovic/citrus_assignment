<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf97a7c2977a0667028db6432880cb155
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf97a7c2977a0667028db6432880cb155::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf97a7c2977a0667028db6432880cb155::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}