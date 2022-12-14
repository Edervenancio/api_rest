<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdedb20be043e4fe21a5a1a0922e7e535
{
    public static $files = array (
        'b588ca3533e1f12f5bd78c066328ed7d' => __DIR__ . '/../..' . '/config.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdedb20be043e4fe21a5a1a0922e7e535::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdedb20be043e4fe21a5a1a0922e7e535::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdedb20be043e4fe21a5a1a0922e7e535::$classMap;

        }, null, ClassLoader::class);
    }
}
