# Laravel Query Log

Package description: CHANGE ME

## Requirements

* PHP >= `7.0`
* Laravel = `5.4.*|5.5.*`

## Getting Started

Add the package in your `composer.json`
```
$ composer require lemberg/laravel-query-log
```

### Register Service Provider (Only for Laravel 5.4)

```
'providers' => [
    Lemberg\LaraveQueryLog\ServiceProvider::class,
],
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Lemberg\LaraveQueryLog\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## License

The Apache License. Please see [License File](LICENSE.md) for more information.
