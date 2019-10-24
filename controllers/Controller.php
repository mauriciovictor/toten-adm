<?php
 
 namespace app\adm\Controller;
 use app\models\userModel;
 use app\adm\Routes\Routes;


 class Controller{
    
    private $action;
    private $actionParams;
    private $router;

    public function getAction(){
       return $this->action;
    }

    public function setAction($action){
       $this->action = $action;
    }

    public function getActionParams(){
      return $this->actionParams;
   }

   public function setActionParams($actionParams){
      $this->actionParams = $actionParams;
   }

    public function execAction(){
      $router  = new Routes();
     
      if(count($router->getRouter()) > 1){
         
         $this->setAction($router->getRouterFunction());
         $this->setActionParams($router->getRouterFuncParams());
  
         $action = $router->getRouter()[1];
         
         return call_user_func_array(array($this, $this->getAction()), $this->getActionParams());       
                     
      }else{
         
         return call_user_func_array(array($this, 'index'), array());

         // return call_user_func_array(array($this, $this->getAction()), $this->getActionParams());
      }
    }
   
    public function loadTemplate($viewName, $viewData =array()){
       extract($viewData);
       if(isset($_SESSION['usuario'])){
         $user = new userModel();
         $acesso = $user->getUsuarioAcesso($_SESSION['usuario']['cod_usuario']);  
       }
       
       include 'Views/Template/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData =array()){
       extract($viewData);
       include 'views/'.$viewName.'.php';
    }
}

?>

