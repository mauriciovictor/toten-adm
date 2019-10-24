<?php
 namespace app\adm\Controller;
 use app\models\apresentacoesModel;
 class apresentacoesController extends Controller{
    public function __construct(){
        parent::execAction();
     }
     public function index(){
        $dados = array(); 
        $home = new apresentacoesModel();
        if(isset($_POST['cod'])){
            $dados['aviso'] = $home->delete($_POST['cod']);
        }
        $dados['apresentacoes'] = $home->getApresentacoes2();
        $this->loadTemplate('apresentacoes', $dados);
     }
     
     public function novo(){
        $dados = array(); 
        $apresentacao = new apresentacoesModel();
        if(isset($_POST['nome_pt'])){
            $dados['aviso'] = $apresentacao->save($_POST['nome_pt'], $_POST['nome_en'], '', '', $_POST['nome_pasta']);
        }
        $this->loadTemplate('apresentacoes-editor', $dados);
     }

     public function editar($id){
        $dados = array(); 
        $apresentacao = new apresentacoesModel();
        if(isset($_POST['nome_pt'])){
            $dados['aviso'] = $apresentacao->edit($id, $_POST['nome_pt'], $_POST['nome_en'], '', '', $_POST['nome_pasta']);
        }
        $dados['apresentacao'] = $apresentacao->getApresentacao($id); 
        $this->loadTemplate('apresentacoes-editor', $dados);
     }
 }

?>