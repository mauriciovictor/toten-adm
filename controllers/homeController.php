<?php

 namespace app\adm\Controller;
 use app\models\userModel;
 class homeController extends Controller{
    public function __construct(){
        parent::execAction();
     }
     public function index(){
        $dados = array();
        $acesso = new userModel();
        $dados['acesso'] = $acesso->getUsuarioAcesso($_SESSION['usuario']['cod_usuario']);
        $this->loadTemplate('home', $dados);
     }

 }


?>