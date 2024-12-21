<?php
    function send_request($url){
        $options = [
            'http' => [
                'header' => "Content-Type: application/json\r\n",
                'method' => 'POST',
            ],
        ];
    
        $context = stream_context_create($options);
        $request = @file_get_contents($url, false, $context);
        
        if(!$request){
            return null;
        }

        return $request;
    }

    echo send_request("http://localhost/personal/zerokelvin/api/v1/user/list");