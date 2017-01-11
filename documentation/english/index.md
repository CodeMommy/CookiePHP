# Documentation of CodeMommy Cookie for PHP

## Start

1. Install by Composer

```bash
composer require codemommy/cookie
```

- Require Vendor Autoload

```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');
```
- Use Namespace

```php
<?php
    use CodeMommy\Cookie;
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