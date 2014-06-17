<?php

final class ClassLoader
{

    /**
     * Already imported library paths
     * @var array
     */
    protected static $_imported = array();

    /**
     * Class path
     * @var string
     */
    protected static $_classPath = '';

    /**
     * Register a class to the autoload list
     *
     * @return void
     */
    public static function registerAutoload()
    {
        spl_autoload_register(array(__CLASS__, 'load'));
    }

    /**
     * Load the file for a class
     *
     * @param string $class
     * @return void
     */
    public static function load($class)
    {
        self::import($class);
    }

    /**
     * Loads a class from specified package
     *
     * @param string $class
     * @throws Exception
     * @return string
     */
    public static function import($class)
    {
        $key = strtolower($class);

        if (array_key_exists($key, self::$_imported)) {
            return self::$_imported[$key]; // Return class
        }

        $path = self::_getPath($class);

        if (class_exists($class, false) or interface_exists($class, false)) {
            return $class;
        }

        if (!is_readable($path)) {
            throw new Exception('Class "' . $class . '" not found.');
        }

        self::_setIncludePath();

        require_once $path;

        // Check if the class or interface is definite in include
        if (!class_exists($class, false) and !interface_exists($class, false)) {
            throw new Exception('Class or interface "' . $class . '" not found.');
        }

        self::$_imported[strtolower($class)] = $class;

        return $class;
    }

    /**
     * Retrieve the path from package
     *
     * @param string $class
     * @return string
     */
    protected static function _getPath($class)
    {
        $path = str_replace('_', '/', $class);

        return realpath(dirname(__FILE__) . '/../' . $path . '.php');
    }

    /**
     * Setting the include path
     *
     * @return void
     */
    protected static function _setIncludePath()
    {
        $includedPath = get_include_path();
        $paths = explode(PATH_SEPARATOR, $includedPath);

        if (false === array_search(self::$_classPath, $paths)) {
            set_include_path(self::$_classPath . PATH_SEPARATOR . $includedPath);
        }
    }

}
