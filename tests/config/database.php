<?php

return array(

    'default' => 'default',

    'connections' => array(

        'neo4j' => array(
            'driver' => 'neo4j',
            'host' => 'dev',
            'port' => 7474,
            'username' => 'neo4j',
            'password' => 'test',
        ),

        'default' => array(
            'driver' => 'neo4j',
            'host' => 'dev',
            'username' => 'neo4j',
            'password' => 'test',
        ),
    ),
);
