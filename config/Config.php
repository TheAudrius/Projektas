<?php

namespace Config;

class Config
{
    private $conf = [
        'db' => [
            'type' => 'mysql',
            'host' => 'localhost',
            'port' => '3307',
            'dbname' => 'shop_audrius',
            'username' => 'shop_audrius',
            'password' => 'audrius120',
        ]
    ];
    
    public function getConfig($index = NULL)
    {

        if($index != NULL) {
            return $this->conf[$index];
        }

        return $this->conf;
    }
}