<?php

namespace engine\base;

/**
 * Class Router
 */
class Router
{

    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $arr = require_once '../config/router.php';
        foreach ($arr as $key => $value){
            $this->add($key,$value);
        }
    }

    /**
     * Добавление роута...
     * @param array $routes
     * @param array $params
     */
    public function add($routes,$params)
    {
       $route = '#^'.$routes.'$#';
       $this->routes[$route] = $params;
    }

    /**
     * Проверка существования роута...
     * @return bool
     */
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'],'/');
        foreach ($this->routes as $route => $params)
        {
            if (preg_match($route,$url,$matches))
            {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /**
     * Метод запуска роутинга...
     */
    public function run()
    {
        if ($this->match()){
            $path = 'app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($path)){
                $action = $this->params['action'] . 'Action';
                if (method_exists($path,$action)){
                    $controller = new $path($this->params);
                    $controller->$action();
                }else{
                    View::errorCode(404);
                }
            }else{
                View::errorCode(404);
            }
        }else{
            View::errorCode(404);
        }
    }
}