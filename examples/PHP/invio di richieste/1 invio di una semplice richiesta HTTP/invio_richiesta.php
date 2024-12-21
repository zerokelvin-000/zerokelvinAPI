<?php
    $url = "http://localhost/personal/zerokelvin/api/v1/user/list";

    $data = ["info" => "prova"];

    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
        ],
    ];
    
    $context = stream_context_create($options);
    $request = @file_get_contents($url, false, $context);