<?php

namespace Emmieio\PhpViteStarter\Helpers;

use Emmieio\PhpViteStarter\Helpers\Container;

abstract class Illusion {
    public static function __callStatic($method, $args)
    {
        $instance = Container::get(static::getIllusionAccessor());
        return $instance->$method(...$args);
    }
    abstract protected static function getIllusionAccessor():string;


}