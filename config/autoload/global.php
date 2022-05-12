<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        //infordatabase
        'dsn' => 'mysql:dbname=techshop;host=localhost',
        //endinfordatabase
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
            => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
