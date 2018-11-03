<?php

include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
//include ROOT_DIR . "services/Autoloader.php";
include ROOT_DIR . "algorithms/Explorer.php";
include ROOT_DIR . "algorithms/Renderer.php";
include ROOT_DIR . "algorithms/scriptTemplate.php";
//include ROOT_DIR ."vendor/autoload.php";
//
//spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);
//
//$controllerName = $_GET['c'] ?: DEFAULT_CONTROLLER;
//$actionName = $_GET['a'];
//
//$controllerClass = CONTROLLERS_NAMESPACE . "\\" . ucfirst($controllerName) . "Controller";
//
//if(class_exists($controllerClass)){
//    $controller = new $controllerClass(
//       // new \app\services\renderers\TemplateRenderer()
//        new \app\services\renderers\TwigRenderer()
//    );
//    $controller->run($actionName);
//}

//
//$iterator = new DirectoryIterator(dirname($_SERVER['DOCUMENT_ROOT'] ));
//var_dump($_SERVER['DOCUMENT_ROOT']) ;
//foreach ($iterator as $fileinfo) {
//    if (!$fileinfo->isDot()) {
//        echo $fileinfo->getFilename() . " " . $fileinfo->getType() . "<br>";
//    }
//   // echo $fileinfo->getFilename() . " " . $fileinfo->getType() . "<br>";
//}

$explorer = new app\algorithms\Explorer();

echo $explorer->getDirContent(dirname($_SERVER['DOCUMENT_ROOT']) );


