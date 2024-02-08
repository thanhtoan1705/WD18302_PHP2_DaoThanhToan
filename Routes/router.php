<?php 
namespace App\Routes;

class Router{
    public $routes=[];

    function get($path, $callback){
        $this->routes['get'][$path]=$callback;
    }

    function post($path, $callback){
        $this->routes['post'][$path]=$callback;
    }

    function run(){
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        if(empty($_GET['action'])){
            $path = isset($_GET['url']) ? '/'.$_GET['url'] : '/';
        }else if(isset($_GET['action']) && empty($_GET['id'])){
            // co the check admin
            $path = isset($_GET['url']) ? '/'.$_GET['url'].'/'.$_GET['action'] : '/';
        }else if(isset($_GET['action']) && isset($_GET['id'])){
            // check admin
            $path = isset($_GET['url']) ? '/'.$_GET['url'].'/'.$_GET['action'].'/'.$_GET['id'] : '/';
        }else{
            echo '404';
            die();
        }
        $callback = $this->routes[$method][$path];
        if($callback == false){
            echo '404';
            die();
        }
        if(is_object($callback)){
            call_user_func($callback);
        }
        if(is_array($callback)){
            $controller = new $callback[0];
            $action = $callback[1];
            call_user_func([$controller,$action]);
        }

    }
}