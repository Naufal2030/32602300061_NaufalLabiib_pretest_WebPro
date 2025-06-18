<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations
     *
     * @var string
     */
    public string $filesPath = APPPATH . 'Database/';

    /**
     * Lets you choose which connection group to
     * use if no other is specified.
     *
     * @var string
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     * 
     * @var array
     */
    public array $default = [
        'DSN' => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'db_pretest',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug' => true,
        'charset' => 'utf8mb4',
        'DBCollat' => 'utf8mb4_general_ci',
        'swapPre' => '',
        'encrypt' => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port' => 3306,
        'numberNative' => false,
        'dateFormat' => [
            'date' => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time' => 'H:i:s',
        ],
    ];

    /**
     * Database connection used when running PHPUnit database tests.
     *
     * @var array
     */
    public array $tests = [
        'DSN' => '',
        'hostname' => '127.0.0.1',
        'username' => '',
        'password' => '',
        'database' => ':memory:',
        'DBDriver' => 'SQLite3',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug' => true,
        'charset' => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre' => '',
        'encrypt' => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port' => 3306,
    ];

    public function __construct()
    {
        parent::__construct();

        // For testing environment, use the 'tests' database group
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
