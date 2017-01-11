<?php

/**
 * @author   Candison November (www.kandisheng.com)
 * @location Nanjing China
 */

namespace CodeMommy;

class Cookie
{
    public static function get($key, $default = null)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return $default;
    }

    public static function set($key, $value, $expire = null, $path = null, $domain = null, $secure = null, $httpOnly = null)
    {
        setcookie($key, $value, $expire, $path, $domain, $secure, $httpOnly);
        return true;
    }

    public static function delete($key)
    {
        self::set($key, null);
        return true;
    }

    public static function isExist($key)
    {
        $value = self::get($key);
        if ($value == null) {
            return false;
        }
        return true;
    }

    public static function clear()
    {
        if ($_COOKIE) {
            foreach ($_COOKIE as $key => $value) {
                self::delete($key);
            }
        }
        return true;
    }
}