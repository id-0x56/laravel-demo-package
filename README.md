## Laravel package example

### Installation
```
composer require id-0x56/laravel-demo-package
```
```
php artisan vendor:publish --provider="id_0x56\LaravelDemoPackage\Providers\LaravelDemoPackageServiceProvider"
```

### Configure
```
// config/demo-package.php

'options' => [
        'hi' => env('LDP_HI', 'hi'),
        'message' => env('LDP_MESSAGE', 'message'),
    ],
```

### Usage
```
use DemQ;

// ...

echo DemQ::hi()
```
