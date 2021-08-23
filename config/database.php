<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => env('DB_CONNECTION'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'dashboard_lppmp'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'mysql3' => [
            'driver' =>  env('DB_CONNECTION_SECOND'),
            'host' => env('DB_HOST_SECOND', '172.16.40.85'),
            'port' => env('DB_PORT_SECOND', '3306'),
            'database' => env('DB_DATABASE_SECOND', 'db_distribusi4g'),
            'username' => env('DB_USERNAME_SECOND', 'dist_shidqi'),
            'password' => env('DB_PASSWORD_SECOND', 'd15T!#5hidq!'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'mysql4' => [
            'driver' =>  env('DB_CONNECTION_THIRD'),
            'host' => env('DB_HOST_THIRD', '203.217.140.83'),
            'port' => env('DB_PORT_THIRD', '3306'),
            'database' => env('DB_DATABASE_THIRD', 'db_tbo4g'),
            'username' => env('DB_USERNAME_THIRD', 'tbo_shidqi'),
            'password' => env('DB_PASSWORD_THIRD', 'tb0#5hidq1!!'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'mysql5' => [
            'driver' =>  env('DB_CONNECTION_FOURTH'),
            'host' => env('DB_HOST_FOURTH', 'sldb1.db.ut.ac.id'),
            'port' => env('DB_PORT_FOURTH', '3306'),
            'database' => env('DB_DATABASE_FOURTH', 'ut_srs_4g_V1_17'),
            'username' => env('DB_USERNAME_FOURTH', 'app_lppmp'),
            'password' => env('DB_PASSWORD_FOURTH', 'Lppmp2021'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'mysql6' => [
            'driver' =>  env('DB_CONNECTION_FIFTH'),
            'host' => env('DB_HOST_FIFTH', 'sldb1.db.ut.ac.id'),
            'port' => env('DB_PORT_FIFTH', '3306'),
            'database' => env('DB_DATABASE_FIFTH', 'ut_srs_4g_V1_17'),
            'username' => env('DB_USERNAME_FIFTH', 'app_lppmp'),
            'password' => env('DB_PASSWORD_FIFTH', 'Lppmp2021'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],


        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
