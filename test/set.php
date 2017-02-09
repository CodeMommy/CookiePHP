<?php

/**
 * @author   Candison November <www.kandisheng.com>
 */

require_once(__DIR__ . '/../source/Cookie.php');

use CodeMommy\CookiePHP\Cookie;

$value = rand(1, 100);
$result = Cookie::set('cookie', $value);
if ($result) {
    echo('Success: ' . $value);
} else {
    echo('Fail.');
}