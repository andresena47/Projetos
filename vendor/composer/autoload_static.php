<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca875a1e89beeb54a6a585cbd21d5164
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitca875a1e89beeb54a6a585cbd21d5164::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca875a1e89beeb54a6a585cbd21d5164::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca875a1e89beeb54a6a585cbd21d5164::$classMap;

        }, null, ClassLoader::class);
    }
}
