<?php

return [
    'active' => (bool)env('QUERY_LOGS', false),
    'path' => storage_path('/logs/sql.log'),
];
