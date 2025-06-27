<?php

namespace Emmieio\PhpViteStarter\Helpers;


class Router  {
    protected $routes =[];


    public function get(string $path, callable $handler){
         $this->routes['GET'][$path] = $handler;
    }
    public function post(){}
    public function put(){}
    public function delete(){}
    public function patch(){}
    public function options(){}
    public function head(){}

    public function dispatch(){
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $route = $this->routes[$method][$uri] ?? null;

        if($route){
            echo call_user_func($route);
        }else{
            http_response_code(404);
            return app()->view('404');
        }
    }
}