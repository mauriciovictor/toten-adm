<?php

 namespace app\adm\Controller;
 use app\models\userModel;
 class userController extends Controller{

    public function __construct(){
        parent::execAction();
    }
     public function index(){
        $dados = array(); 
        $users = new userModel();
        
        if(isset($_POST['cod'])){
            $users->deleteUsuario($_POST['cod']);
        }
        $dados['usuarios'] = $users->getUsuarios();
        // $dados['teste'] = $users->saveUsuario('mauricio', 'mauricio', 'teste', '123',[1,2]);
        // $users->saveAcesso($dados['teste']['cod_usuario'], [1,2]);
        // var_dump($dados['teste']);
        $this->loadTemplate('usuarios', $dados);
     }

     public function novo(){
        $dados = array(); 
        $users = new userModel();
        $dados['modulos'] = $users->getModulos();
        if(isset($_POST['modulo'])){
            $dados['aviso'] = $users->saveUsuario($_POST['nome'], $_POST['login'], $_POST['email'], md5($_POST['senha']), $_POST['modulo']);
        }
        $this->loadTemplate('usuarios-editor', $dados);
     }

     public function editar($id){
        $dados = array(); 
        $users = new userModel();
        if(isset($_POST['email'])){
          
         $dados['aviso'] = $users->edit($id, $_POST['login'], $_POST['email'], $_POST['modulo']);
        }
        $dados['usuario'] = $users->getUsuario($id);
        $dados['usuario_acesso'] = $users->getUsuarioAcesso($id);

        $this->loadTemplate('usuarios-editor', $dados);
     }

     public function logout(){
        $users = new userModel();
        $users->logout($_SESSION['login']);
     }

 }

?>