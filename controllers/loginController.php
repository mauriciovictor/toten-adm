<?php

 namespace app\adm\Controller;
 use app\models\userModel;
 class loginController extends Controller{
    public function __construct(){
        parent::execAction();
     }
     public function index(){
        $dados = array();
        
        if(isset($_POST['login'])){
            $login = new userModel();
            $dados['aviso'] = $login->login($_POST['login'], $_POST['senha']);
        }

        $this->loadTemplate('login', $dados);
     }

 }


?>