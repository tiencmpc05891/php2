<?php

namespace App\Core;

class Route
{
    protected array $routes;

    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }


    public function resolve(string $requestUrl)
    {
        $route = explode('?', $requestUrl)[0];
        $action = $this->routes[$route] ?? null;

        if (!$action) {
            throw new \Exception("không hiển thị trang");
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $class = new $class;
                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }
    }
}
