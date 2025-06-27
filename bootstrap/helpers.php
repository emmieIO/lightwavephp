<?php

use Emmieio\PhpViteStarter\Helpers\Container;

if(!function_exists('app')){
    function app(string $key = null){
        return $key ? Container::get($key) : Container::get('app');
    }
}