<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb612e0b11a77d939ae9b8b9a169384fc
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

        spl_autoload_register(array('ComposerAutoloaderInitb612e0b11a77d939ae9b8b9a169384fc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb612e0b11a77d939ae9b8b9a169384fc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb612e0b11a77d939ae9b8b9a169384fc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
