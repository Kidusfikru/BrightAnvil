<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60858cb628d3f796174be3146731321a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60858cb628d3f796174be3146731321a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60858cb628d3f796174be3146731321a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60858cb628d3f796174be3146731321a::$classMap;

        }, null, ClassLoader::class);
    }
}
