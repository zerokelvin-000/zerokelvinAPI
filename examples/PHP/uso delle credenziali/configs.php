<?php

    class Configs{
        private $user_token;

        public function set_token($user_token){
            $this->user_token = $user_token;
        }

        public function get_token(){
            return $this->user_token;
        }
    }

    $configs = new Configs();
    $configs->set_token("token_di_prova");