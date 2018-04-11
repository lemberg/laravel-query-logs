# Query Log

[![Build Status](https://travis-ci.org/lemberg/query-log.svg?branch=master)](https://travis-ci.org/lemberg/query-log)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lemberg/query-log/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lemberg/query-log/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/lemberg/query-log/badge.svg?branch=master)](https://coveralls.io/github/lemberg/query-log?branch=master)

[![Packagist](https://img.shields.io/packagist/v/lemberg/query-log.svg)](https://packagist.org/packages/lemberg/query-log)
[![Packagist](https://poser.pugx.org/lemberg/query-log/d/total.svg)](https://packagist.org/packages/lemberg/query-log)
[![Packagist](https://img.shields.io/packagist/l/lemberg/query-log.svg)](https://packagist.org/packages/lemberg/query-log)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require lemberg/laravel-query-log
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Lemberg\LaraveQueryLog\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Lemberg\LaraveQueryLog\Facades\LaraveQueryLog::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Lemberg\LaraveQueryLog\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/lemberg/query-log)
- [All contributors](https://github.com/lemberg/query-log/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
