<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit260b42edf121a2a8fdc80bd814036e45
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

        spl_autoload_register(array('ComposerAutoloaderInit260b42edf121a2a8fdc80bd814036e45', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit260b42edf121a2a8fdc80bd814036e45', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit260b42edf121a2a8fdc80bd814036e45::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}