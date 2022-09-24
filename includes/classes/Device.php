<?php

/**
 * Check if the browser is on desktop or mobile 
 * Category: Singleton
 * @version 1.0
 */

// Delete this line if your note on wordpress
defined('ABSPATH') || exit;

class Device
{
    private static $instances = [];

    public static $is_phone = false;

    /**
     * The Singleton's constructor should always be private to prevent direct
     * construction calls with the `new` operator.
     */
    protected function __construct()
    {
    }

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Device
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        if (self::check_device()) {
            self::$is_phone = true;
        }

        return self::$instances[$cls];
    }

    public static function check_device()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
}

Device::getInstance();