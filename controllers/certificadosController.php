<?php

 namespace app\adm\Controller;
 use app\models\certificadosModel;

 class certificadosController extends Controller{
     public function __construct(){
        parent::execAction();
     }
     
     public function index(){
         $dados = array();

         $email = new certificadosModel();
         $dados['certificados'] = $email->getCertificados2();
         
         if(isset($_POST['cod'])){
            $email->deleteCertificado($_POST['cod']);   
         }
         $this->loadTemplate('certificados', $dados);
     }

     public function editar($id){
        $dados = array();
        $certificadosModel = new certificadosModel();
        if(isset($_POST['nome_pt'])){
          $dados['aviso'] = $certificadosModel->edit($id, $_POST['nome_pt'], $_POST['nome_en'], '', '',$_FILES['pdf']);     
        }
        $dados['certificado'] = $certificadosModel->getCertificado($id);
        $this->loadTemplate('certificados-editor', $dados);
     }

     public function novo(){
        $dados = array();
        $certificadosModel = new certificadosModel();
        if(isset($_POST['nome_pt'])){
            $dados['aviso'] = $certificadosModel->saveCertificados($_POST['nome_pt'], $_POST['nome_en'], '', '',$_FILES['pdf']);
        }
        $this->loadTemplate('certificados-editor', $dados);
     }

 }

?>