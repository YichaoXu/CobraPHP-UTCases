<?php

/* expFramework.php */
function renderAction(array $params = array())
{
    // Create controller instance by name (PHP Reflection)
    $controllerName = $params['controller'];
    if (!str_ends_with($controllerName, "Controller")) {
        return null;
    } // If not ends with "Controller", do nothing
    $controller = new $controllerName($params);
    // Call action method by name (PHP Reflection again)
    $actionName = $params['action'];
    $controller->$actionName($params["api_key"]);
}
