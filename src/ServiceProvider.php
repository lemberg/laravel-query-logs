<?php

namespace Lemberg\LaravelQueryLogs;

use Illuminate\Support\Facades\DB;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/query-log.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('query-log.php'),
        ], 'config');

        $this->writeLogs();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'query-log'
        );
    }

    protected function writeLogs()
    {
        if (config('query-log.active') === true) {
            DB::listen(function ($query) {
                // instance of Monolog
                $monolog = new Logger('query_logs');

                // Choose FirePHP as the log handler
                $monolog->pushHandler(new StreamHandler(config('query-log.path'), Logger::DEBUG));

                // To get the full sql query with bindings inserted
                $sql = str_replace(array('%', '?'), array('%%', '%s'), $query->sql);
                $fullSql = vsprintf($sql, $query->bindings);

                // Start logging
                $monolog->addRecord(Logger::INFO, 'SQL', array('time' => $query->time, 'query' => $fullSql));
            });
        }
    }
}
