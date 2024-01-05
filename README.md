# Hello World Library
Belajar membuat library dengan composer

## Install
Jalankan perintah `composer require rezafikkri/php-composer-hello`.

## Contoh Penggunaan
```php
<?php

use RezaFikkri\Belajar\Customer;

require_once __DIR__ . '/vendor/autoload.php';

$customer = new Customer("Reza");

echo $customer->sayHello("Adel") . PHP_EOL;
```
