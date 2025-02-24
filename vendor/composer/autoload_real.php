<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbd87bf4c8bffcec24444bbb0c346be9e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbd87bf4c8bffcec24444bbb0c346be9e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbd87bf4c8bffcec24444bbb0c346be9e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbd87bf4c8bffcec24444bbb0c346be9e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
