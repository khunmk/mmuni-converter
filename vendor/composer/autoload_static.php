<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite145dd11747c04134114aeae33fe1830
{
    public static $files = array (
        'b8b0e6ebdde0fd41337c41b08589cda3' => __DIR__ . '/..' . '/rabbit-converter/rabbit-php/src/Rabbit.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Googlei18n\\MyanmarTools\\' => 24,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Googlei18n\\MyanmarTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/googlei18n/myanmar-tools/clients/php/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite145dd11747c04134114aeae33fe1830::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite145dd11747c04134114aeae33fe1830::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
