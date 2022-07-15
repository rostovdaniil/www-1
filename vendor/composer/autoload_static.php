<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d034bbcab0da1bbc7e89c68fa5cde80
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '091bb482e31030af96936a1127ccdf46' => __DIR__ . '/../..' . '/core/Functions/pa.php',
        '632f4deffadac08b8ceb28a5a5e426e1' => __DIR__ . '/../..' . '/core/Functions/pn.php',
        'ad1daf2aa123e565e53965b3bc86a542' => __DIR__ . '/../..' . '/core/Config.php',
        '7ee6d0bf90921534438b9231d1be51b7' => __DIR__ . '/../..' . '/core/Data.php',
        '93da09a2cc7688dda67d8076b828bd92' => __DIR__ . '/../..' . '/core/Registr.php',
        'b650c1d675421a0e33cc39d60e6b50cd' => __DIR__ . '/../..' . '/core/Route.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
            'Matrix\\' => 7,
        ),
        'C' => 
        array (
            'Complex\\' => 8,
        ),
        'A' => 
        array (
            'App\\Service\\' => 12,
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Matrix\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/matrix/classes/src',
        ),
        'Complex\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/complex/classes/src',
        ),
        'App\\Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Service',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/core',
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d034bbcab0da1bbc7e89c68fa5cde80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d034bbcab0da1bbc7e89c68fa5cde80::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit0d034bbcab0da1bbc7e89c68fa5cde80::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0d034bbcab0da1bbc7e89c68fa5cde80::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0d034bbcab0da1bbc7e89c68fa5cde80::$classMap;

        }, null, ClassLoader::class);
    }
}
