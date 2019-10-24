<?php

 namespace app\adm\Controller;
 use app\models\RQAModel;

 class rqaController extends Controller{
     public function __construct(){
        parent::execAction();
     }

     public function index(){
        $dados = array(); 
        $rqa = new RQAModel();

        if(isset($_POST['resolvido'])){
           $dados['aviso'] = $rqa->saveResolvido($_POST['resolvido']);
        }

        $dados['rqa']    = $rqa->getRQA();
        $dados['tot_hj'] = $rqa->getTotalRQAHJ();
        $dados['tot_atend'] = $rqa->getTotalRQAResolvidos(); 
        $dados['tot_n_atend'] = $rqa->getTotalRQANaoResolvidos();  
        $this->loadTemplate('rqa', $dados);
     }

     public function tipo_ocorrencias($acao = 0, $id = 0){
         $dados = array(); 
         $rqa = new RQAModel();

         if(isset($_POST['cod'])){
            $rqa->deleteTp_Ocorrencia($_POST['cod']);
         }

         if(strpos($_SERVER['REQUEST_URI'], 'novo')){
            
            if(isset($_POST['nome'])){
               $dados['aviso'] = $rqa->saveTp_Ocorrencia($_POST['nome'], $_POST['nome_en']);
            }

            $dados['tp_ocorrencias'] = $rqa->getRQATpOcorrencias(); 
            $this->loadTemplate('rqa-editor', $dados);

         }elseif(strpos($_SERVER['REQUEST_URI'], 'editar')){
            
            if(isset($_POST['nome'])){
               $dados['aviso'] = $rqa->editTp_Ocorrencia($id, $_POST['nome'], $_POST['nome_en']);
            }
            
            // var_dump($dados['aviso']);

            $dados['tp_ocorrencia'] = $rqa->getRQATpOcorrencia2($id); 

            $this->loadTemplate('rqa-editor', $dados);

         }else{

            $dados['tp_ocorrencias'] = $rqa->getRQATpOcorrencias(); 
            $this->loadTemplate('tipo-ocorrencias', $dados);

         }
      }

      // public function novo(){
      //    $dados = array(); 
      //    $this->loadTemplate('home', $dados);
      // }

      // public function editar($id){
      //    $dados = array();

      //    $rqa = new RQAModel();
         
      //    if(isset($_POST['nome'])){
      //       $dados['aviso'] = $rqa->editTp_Ocorrencia();
      //    }
      //    $dados['tp_ocorrencia'] = $rqa->getRQATpOcorrencia($id);
      //    $this->loadTemplate('home', $dados);
      // }
     
 }


?>