<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit809fa654d88dd46f60722ca5f2b45ce0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit809fa654d88dd46f60722ca5f2b45ce0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit809fa654d88dd46f60722ca5f2b45ce0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit809fa654d88dd46f60722ca5f2b45ce0::$classMap;

        }, null, ClassLoader::class);
    }
}
