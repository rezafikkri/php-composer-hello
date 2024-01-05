# Hello World Library
Belajar membuat library dengan composer

## Install
Buka file `composer.json` dan tambahkan code ini pada property **repositories**

```json
{
  "type": "vcs",
  "url": "https://github.com/rezafikkri/php-composer-hello"
}
```

Lalu jalankan perintah `composer require rezafikkri/php-composer-hello`.

## Contoh Penggunaan
```php
<?php

use RezaFikkri\Belajar\Customer;

require_once __DIR__ . '/vendor/autoload.php';

$customer = new Customer("Reza");

echo $customer->sayHello("Adel") . PHP_EOL;
```
