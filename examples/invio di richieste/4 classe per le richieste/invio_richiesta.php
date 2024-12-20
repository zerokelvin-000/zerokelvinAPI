<?php
    class Request{
        private string $url;
        private array $data;

        public function set_url($url){
            $this->url = $url;
        }

        public function set_data($data){
            $this->data = $data;
        }

        public function send_request(){
            $options = [
                'http' => [
                    'header' => "Content-Type: application/json",
                    'method' => 'POST',
                    'content' => json_encode($this->data)
                ],
            ];
        
            $context = stream_context_create($options);
            $request = @file_get_contents($this->url, false, $context);
            
            if(!$request){
                return null;
            }
    
            return $request;
        }
    }