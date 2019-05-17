Foundation Service
======================

TL;DR
-----
Foundation service in laravel.

Install
-------
1. update composer.json

```
{
    "require": {
        "php-team/package-foundation-service": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://gitlab.sjfood.us/php-team/package-foundation-service.git"
        }
    ]
}
```

2. Install via composer

```
composer update php-team/package-foundation-service
```

3. Add Service Provider to `config/app.php` in `providers` section

```php
Phpteam\FoundationService\FoundationServiceProvider::class,
```

4. Generate config file

```
php artisan vendor:publish --provider="Phpteam\FoundationService\FoundationServiceProvider"

php artisan foundation:config
```

5. Genrate migrations

```
php artisan foundation:make
```

6. start queue

```
php artisan foundation:work
```

Usage
-----

```
php artisan foundation:work
```
