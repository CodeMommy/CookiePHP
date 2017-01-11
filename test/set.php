<?php

/**
 * @author   Candison November
 * @website  www.kandisheng.com
 * @location Nanjing China
 */

require_once(__DIR__ . '/../core/Cookie.php');

use CodeMommy\Cookie;

$value = rand(1, 100);
$result = Cookie::set('cookie', $value);
if ($result) {
    echo('Success: ' . $value);
} else {
    echo('Fail.');
}