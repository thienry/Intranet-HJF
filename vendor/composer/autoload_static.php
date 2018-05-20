<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3be998feb65c5cd285130a4a8a1cbfe4
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/thiago/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit3be998feb65c5cd285130a4a8a1cbfe4::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3be998feb65c5cd285130a4a8a1cbfe4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}