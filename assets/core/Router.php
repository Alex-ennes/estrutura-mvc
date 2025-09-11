<?php 
    namespace Assets\Core;

    use Assets\Controllers\HomeController;
    use Assets\Controllers\Errors\HttpErrorController;

    class Router {
        public function dispatch($url) {
            $url = trim($url, '/');
            $parts = $url ? explode('/', $url) : [];


            $controllerName = $parts[0] ?? 'Home';
            $controllerName = 'Assets\Controllers\\' . ucfirst($controllerName) . 'Controller';

            $actionName = $parts[1] ?? 'index';

            if (!class_exists($controllerName)) {
                //exibir o erro 404;
                $controller = new HttpErrorController();
                $controller->notFound();
                return;
            }
            $controller = new $controllerName();

            if (!method_exists($controller, $actionName)) {
                $controller = new HttpErrorController();
                $controller->notFound();
                return;
            }
            
            $params = array_slice($parts, 2);
            dd($params);       
            call_user_func_array([$controller, $actionName], $params);
        }
    }
?>