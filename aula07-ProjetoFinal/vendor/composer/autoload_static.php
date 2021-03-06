<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08e2f36d18bc54f855eccdfe1ec45890
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08e2f36d18bc54f855eccdfe1ec45890::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08e2f36d18bc54f855eccdfe1ec45890::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08e2f36d18bc54f855eccdfe1ec45890::$classMap;

        }, null, ClassLoader::class);
    }
}
