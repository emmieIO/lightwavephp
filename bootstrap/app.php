<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/helpers.php';

use Emmieio\PhpViteStarter\Helpers\Container;
use Emmieio\PhpViteStarter\Helpers\Application;
use Emmieio\PhpViteStarter\Helpers\Router;

Container::bind('app', fn()=>new Application());
Container::bind('router', fn() => (new Router()));