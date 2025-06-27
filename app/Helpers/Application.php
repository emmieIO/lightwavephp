<?php

namespace Emmieio\PhpViteStarter\Helpers;

use eftec\bladeone\BladeOne;
use Dotenv\Dotenv;

class Application {
    public BladeOne $blade;

    public function __construct(){
        $this->loadEnv();
        $this->registerEnvHandler();
        $this->initializeBlade();
    }

    protected function loadEnv(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();
    }

    protected function registerEnvHandler():void
    {
        if(!function_exists('env')){
            function env($key, $default = null) {
                return $_ENV[$key] ?? $default;
            }
        }
    }

    protected function initializeBlade(): void
    {
        $views = __DIR__ . '/../../resources/views';
        $cache = __DIR__ . '/../../storage/cache';
        $this->blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
    }

    protected function shareGlobals(array &$data)
    {
        $data['vite'] = fn($entry) => Vite::asset($entry);
    }

    public function view(string $view, array $data = [])
    {
        $this->shareGlobals($data);
        echo $this->blade->run($view, $data);
    }

}