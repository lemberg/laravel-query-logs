<?php

return [
    'active' => env('QUERY_LOGS', false),
    'path' => storage_path('/logs/sql.log'),
];
