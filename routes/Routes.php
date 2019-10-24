<?php

 namespace app\adm\Routes;

 class Routes{
   
   public function getController(){
    $routes = array(    
        ""      => "home",
        "home"  => "homeController",
        'contato' => 'contatoController',
        'certificados' => 'certificadosController',
        'rqa' => 'rqaController',
        'noticias' => 'noticiasController',
        "apresentacoes" => "apresentacoesController",
        "user"          => "userController",
        "login"         => "loginController"    
    );

     if(Self::getRouter()[0] == ''  ){
          
          return "homeController";
         
     }else{
        if(array_key_exists(Self::getRouter()[0], $routes)){
            if(file_exists(DIRETORIO."\Controllers\\".$routes[self::getRouter()[0]].".php"))  {
                
                    return $routes[self::getRouter()[0]];
               
         
            }else{
        
                return "erro404Controllera";
        
            }

         }else{
        
            return "erro404Controller";
         
        }

     }

   } 
    
   public function getRouter(){
  
        return explode('/', rtrim($_GET['url']), FILTER_SANITIZE_URL);
  
    }

    public function getRouterFunction(){
        
        return Self::getRouter()[1];
    
    }

    public function getRouterFuncParams(){
        
        $params = array();

        if(count(Self::getRouter()) > 1){
            
            for($i = 2; $i<=count(Self::getRouter()) - 1; $i++ ){
            
                $params[] = Self::getRouter()[$i];
            
            }
        
        }

        return $params;
    }

 }

?>