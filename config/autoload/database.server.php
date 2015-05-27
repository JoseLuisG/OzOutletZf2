<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'db' => array(
            'driver'    => 'pdo',
        'dsn'       => 'mysql:dbname=usuarios;host=localhost;',
        'username'  => 'lkmrljan_root',
        'password'  => 'admin1234',
    ),
);
