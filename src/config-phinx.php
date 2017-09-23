<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'dbname');
define('DB_USER', 'user');
define('DB_PASSWORD', 'password');

return [
  'paths' => [
    'migrations' => 'migrations'
  ],
  'migration_base_class' => '\ApiProject\Migrations\Migration',
  'environments' => [
    'default_migration_table' => 'phinxlog',
    'default_database' => 'dev',
    'dev' => [
      'adapter' => 'mysql',
      'host' => DB_HOST,
      'name' => DB_NAME,
      'user' => DB_USER,
      'pass' => DB_PASSWORD,
    ]
  ]
];