<?php

use Triposhub\Ubunifu\Application\Config;

class AppConfig {

    public static function load($key, $type)
    {
        $path = realpath(dirname(__FILE__) . '/../../../') . '/apps/ubunifu.ext/config/'.$type.'_config.php';
        if(file_exists($path))
        {
            require $path;
        }
        $config = $config;
        if(isset($config)){
            return $config[$key];
        }
    }

    public static function all($type)
    {
        $path = realpath(dirname(__FILE__) . '/../../../') . '/apps/ubunifu.ext/config/'.$type.'_config.php';
        if(file_exists($path))
        {
            require $path;
        }
        $config = $config;
        if(isset($config)){
            return $config;
        }
    }
}