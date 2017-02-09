<?php

/**
 * @author   Candison November <www.kandisheng.com>
 */

require_once(__DIR__ . '/../source/Cookie.php');

use CodeMommy\CookiePHP\Cookie;

$result = Cookie::get('cookie');
var_dump($result);