<?php

return [
    'active' => env('QUERY_LOG', false),
    'path' => storage_path('/logs/sql.log'),
];
