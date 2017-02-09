# Documentation of CodeMommy CookiePHP

## Start

### 1. Install by Composer
```bash
composer require codemommy/cookiephp
```

### 2. Require Vendor Autoload File
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

### 3. Use Namespace
```php
<?php
use CodeMommy\CookiePHP\Cookie;
```

## Functions

### get
```php
<?php
$result = Cookie::get('key', 'default');
```

### set
```php
<?php
Cookie::set('key', 'value', $expire = null, $path = null, $domain = null, $secure = null, $httpOnly = null);
```

### isExist
```php
<?php
$result = Cookie::isExist('key');
```

### delete
```php
<?php
Cookie::delete('key');
```

### clear
```php
<?php
Cookie::clear();
```
