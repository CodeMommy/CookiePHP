<?php

/**
 * CodeMommy CookiePHP
 * @author  Candison November <www.kandisheng.com>
 * @version 1.0.1
 */

namespace CodeMommy\CookiePHP;

class Cookie
{
    /**
     * Get value from cookie
     *
     * @param string $key
     * @param string $default [optional]
     *
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return $default;
    }

    /**
     * Set cookie
     *
     * @param string $key
     * @param string $value
     * @param int $expire    [optional]
     * @param string $path   [optional]
     * @param string $domain [optional]
     * @param bool $secure   [optional]
     * @param bool $httpOnly [optional]
     *
     * @return bool
     */
    public static function set($key, $value, $expire = null, $path = null, $domain = null, $secure = null, $httpOnly = null)
    {
        $result = setcookie($key, $value, $expire, $path, $domain, $secure, $httpOnly);
        return $result;
    }

    /**
     * Delete cookie by key
     *
     * @param string $key
     *
     * @return bool
     */
    public static function delete($key)
    {
        $result = self::set($key, null);
        return $result;
    }

    /**
     * Check if some cookies is exist or not
     *
     * @param string $key
     *
     * @return bool
     */
    public static function isExist($key)
    {
        $value = self::get($key);
        if ($value == null) {
            return false;
        }
        return true;
    }

    /**
     * Clear all cookies
     *
     * @param void
     *
     * @return bool
     */
    public static function clear()
    {
        $isClearAll = true;
        if ($_COOKIE) {
            foreach ($_COOKIE as $key => $value) {
                $result = self::delete($key);
                if (!$result) {
                    $isClearAll = false;
                }
            }
        }
        return $isClearAll;
    }
}