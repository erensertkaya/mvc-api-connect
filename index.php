<?php
session_start();
@$route = $_GET['_url'];

$myRoute = explode('/',$route);
if (count($myRoute)==0 || $myRoute[0]==''){
    $myRoute[0] = 'home';
    $myRoute[1] = 'index';
}
include 'middleware.php';

function my_autoloader($class) {
    $controllerFile = 'controllers/' . $class . '.php';
    $modelFile = 'models/' . $class . '.php';
    if (substr($class,-10)==='Controller' &&
        file_exists($controllerFile)
    ){
        include $controllerFile;
    } elseif (substr($class,-5)==='Model' &&
        file_exists($modelFile)
    ){
        include $modelFile;
    } else {
        include 'views/404.php';
    }
}
spl_autoload_register('my_autoloader');

try {
    if (class_exists('MiddleWare')){
        @new MiddleWare($myRoute[1]);
    } else {
        throw new Exception('middleware yok');
    }


    $myClass = $myRoute[0].'Controller';
    if (!class_exists($myClass)){
        throw new Exception('bulunamayan sınıf : '.$myClass);
    }
    $myClass = new $myClass();
    $myMethod = isset($myRoute[1])?$myRoute[1]:'index';
    if (method_exists($myClass,$myMethod) && count($myRoute) <= 1){
        $myClass->$myMethod();
    }
    $myParameter = isset($myRoute[2])?$myRoute[2]:'index';
    if (method_exists($myClass,$myMethod)){
        $myClass->$myMethod($myParameter);
    }


} catch(Exception $e){
    echo $e->getMessage();
}

?>