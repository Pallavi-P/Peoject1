<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2dab6e0dc05c9e66fc6376c2f0a827b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2dab6e0dc05c9e66fc6376c2f0a827b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2dab6e0dc05c9e66fc6376c2f0a827b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite2dab6e0dc05c9e66fc6376c2f0a827b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
