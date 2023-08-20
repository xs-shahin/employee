<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c0da662cd609d4b6fd350f6a18be134
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xpeedstudio\\Employee\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xpeedstudio\\Employee\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c0da662cd609d4b6fd350f6a18be134::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c0da662cd609d4b6fd350f6a18be134::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c0da662cd609d4b6fd350f6a18be134::$classMap;

        }, null, ClassLoader::class);
    }
}