<?php

/**
 * @author   Candison November
 * @website  www.kandisheng.com
 * @location Nanjing China
 */

require_once(__DIR__ . '/../core/Cookie.php');

use CodeMommy\Cookie;

$result = Cookie::get('cookie');
var_dump($result);