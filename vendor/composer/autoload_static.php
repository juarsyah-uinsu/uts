<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8464a9c3386c84a7e36bc88ac4857971
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'J' => 
        array (
            'JuarsyahUinsu\\Uts\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'JuarsyahUinsu\\Uts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8464a9c3386c84a7e36bc88ac4857971::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8464a9c3386c84a7e36bc88ac4857971::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8464a9c3386c84a7e36bc88ac4857971::$classMap;

        }, null, ClassLoader::class);
    }
}