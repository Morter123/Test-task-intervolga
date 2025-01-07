<?php

namespace core;

class Router
{

    protected $uri;
    public $routes = [];

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

        // Данная очистка нужна лишь в моем лок. проекте
        if (str_contains($this->uri, 'testTaskIntervolga/task3/public') == true) {
            $this->uri = str_replace('testTaskIntervolga/task3/public', '', $this->uri);
        };
    }

    // Основная функция для роутинга по страницам, здесь все происходит
    public function start()
    {
        foreach ($this->routes as $route) {
            if ($this->uri == $route['uri']) {
                require_once($route['controller']);
            }
        }
    }


    public function add($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller);
    }

    public function post() {}
}
