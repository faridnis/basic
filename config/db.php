<?php

return [
    // testing for home DB
    // 'class' => 'yii\db\Connection',
    // 'dsn' => 'mysql:host=localhost;dbname=portfolio',
    // 'username' => 'portfolio',
    // 'password' => 'Test123',
    // 'charset' => 'utf8',

    // Testing on work DB
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
