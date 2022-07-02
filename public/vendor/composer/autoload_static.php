<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0dbafd48e44a9efb0dab833d157c3f5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0dbafd48e44a9efb0dab833d157c3f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0dbafd48e44a9efb0dab833d157c3f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0dbafd48e44a9efb0dab833d157c3f5::$classMap;

        }, null, ClassLoader::class);
    }
}
