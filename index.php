<?php
   session_start();
   require_once __DIR__.'/config.php';
  
   require_once ('../../../vendor/autoload.php');
   
   use app\adm\Routes\Routes;
   use app\adm\Controller\loginController;
  
   $router  = new Routes();

    $classController = "app\\adm\\Controller\\".$router->getController();

    $controller = new $classController;

?>