<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3dec1b51a8a949fb1a8a3e261de7695
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3dec1b51a8a949fb1a8a3e261de7695::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3dec1b51a8a949fb1a8a3e261de7695::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
