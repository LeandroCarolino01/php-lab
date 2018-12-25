<?php

    $server = [
        'host server name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE']
    
    ];

    echo $server['Server Software'];