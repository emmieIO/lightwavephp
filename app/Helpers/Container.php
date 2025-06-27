<?php

namespace Emmieio\PhpViteStarter\Helpers;



class Container {
    protected static array $instances = [];

    public static function bind(string $key, callable $resolver)
    {
        static::$instances[$key] = $resolver();
    }

    public static function get(string $key)
    {
        if (!isset(static::$instances[$key])) {
            throw new \Exception("No instance bound for {$key}");
        }
    
        return static::$instances[$key];
    }
}
