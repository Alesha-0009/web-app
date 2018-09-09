<?php

namespace engine\base;

/**
 * Class View
 * @package engine\base
 */
class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    /**
     * Отрисовка вида...
     * @param string $title
     * @param array $vars
     */
    public function render($title,$vars = [])
    {
        extract($vars);
        if (file_exists('../app/views/' . $this->path . '.php')){
            ob_start();
            require_once '../app/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require_once '../app/views/layout/' . $this->layout . '.php';
        }else{
            echo "<p style='color: red;text-align: center;'>Вид не найден:{$this->path}</p>";
        }
    }

    /**
     * @param string $url
     */
    public function redirect($url)
    {
        header("Location: {$url}");
        exit;
    }

    /**
     * Вывод ошибок...
     * @param int $code
     */
    public static function errorCode($code)
    {
        http_response_code($code);
        require_once '../app/views/errors/' . $code . '.php';
        exit;
    }
}