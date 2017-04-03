<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacd6f67f227cbe829892275055f4b4d1
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phalcon\\Ext\\Mailer\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phalcon\\Ext\\Mailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalcon-ext/mailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacd6f67f227cbe829892275055f4b4d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacd6f67f227cbe829892275055f4b4d1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}