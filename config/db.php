<?php

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => 'mysql:host=' . env('MYSQL_HOST') . ';dbname=' . env('MYSQL_DATABASE'),
    'username' => env('MYSQL_ROOT_USERNAME'),
    'password' => env('MYSQL_ROOT_PASSWORD'),
    'charset'  => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
