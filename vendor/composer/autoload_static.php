<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67831e7a25a131182e04ee800ed54919
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPFleet\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPFleet\\' => 
        array (
            0 => __DIR__ . '/../..' . '/dist/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67831e7a25a131182e04ee800ed54919::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67831e7a25a131182e04ee800ed54919::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67831e7a25a131182e04ee800ed54919::$classMap;

        }, null, ClassLoader::class);
    }
}