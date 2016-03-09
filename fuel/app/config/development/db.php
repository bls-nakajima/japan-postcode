<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'default' => array(
        'type'       => 'mysqli',
        'connection' => array(
            'hostname'   => 'us-cdbr-iron-east-03.cleardb.net',
            'port'       => '3306',
            'database'   => 'heroku_490c771cf5fdd06',
            'username' => 'b1970788c9ba66',
            'password' => '5479b3c8',
            'persistent' => true,
            'compress'   => true,
        ),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => 'utf8',
        'enable_cache' => true,
        'profiling'    => true,
        'readonly'     => false,
        'time_zone'    => '+9:00'
    ),
    'redis'   => array(
        'default' => array(
            'hostname' => 'ec2-54-83-204-56.compute-1.amazonaws.com',
            'port'     => 11389,
            'timeout'  => null,
            'database' => 0,
            'password' => 'pceaedk0knev0h8181cd0kma4lv'
        ),
    ),
);
