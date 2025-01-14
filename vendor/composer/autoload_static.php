<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78a26390c4adec449ade32f0517a7526
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klaive\\' => 7,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klaive\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78a26390c4adec449ade32f0517a7526::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78a26390c4adec449ade32f0517a7526::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
