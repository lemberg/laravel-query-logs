# Laravel Query Logs

Log database queries into file.

## Requirements

* PHP >= `7.0`
* Laravel = `5.4.*|5.5.*`

## Getting Started

Install package via composer
```
$ composer require lemberg/laravel-query-logs
```

### Register Service Provider (Only for Laravel 5.4)

```
'providers' => [
    Lemberg\LaraveQueryLogs\ServiceProvider::class,
],
```

### Publish Configuration File

```
php artisan vendor:publish --provider="Lemberg\LaravelQueryLogs\ServiceProvider" --tag="config"
```

## Usage

1. Add `QUERY_LOGS=true` to .env file.<br/>

2. By default queries will store into `/storage/logs/sql.log` file.<br/> 
You can change it by editing the `path` option in `query-log.php` file

Actually that's all:) 

## License

Please see [License File](LICENSE.md) for more information.
