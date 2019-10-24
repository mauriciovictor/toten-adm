<?php

 namespace app\adm\Controller;
 use app\models\noticiasModel;

 class noticiasController extends Controller{
     public function __construct(){
        parent::execAction();
     }
     
     public function index(){
         $dados = array();
         $noticias = new noticiasModel();
         if(isset($_POST['cod'])){
           $noticias->delete($_POST['cod']);     
         } 
         $dados['noticias'] = $noticias->getTodasNoticias();
         $this->loadTemplate('noticias', $dados);
     }

     public function editar($id){
        $dados = array();
        $noticia = new noticiasModel();
        
        if(isset($_POST['titulo_pt']) && !empty($_POST['titulo_pt'])){
         $dados['aviso'] =  $noticia->edit(
                  $_POST['titulo_pt'], 
                  $_POST['sub_titulo_pt'], 
                  $_POST['descricao_pt'], 
                  $_POST['titulo_en'], 
                  $_POST['sub_titulo_en'], 
                  $_POST['descricao_en'],
                  $_FILES['img'], 
                  $_POST['desc_img_pt'], 
                  $_POST['desc_img_en'],
                  $_POST['data_noticia'],
                  $id);
        }
        $dados['noticia'] = $noticia->getNoticiaEditar($id);
        $this->loadTemplate('noticias-editor', $dados);
     }

     public function novo(){
        $dados = array();
        $noticia = new noticiasModel();
        if(isset($_POST['titulo_pt']) && !empty($_POST['titulo_pt'])){
         $dados['aviso'] =  $noticia->saveNoticia(
                  $_POST['titulo_pt'], 
                  $_POST['sub_titulo_pt'], 
                  $_POST['descricao_pt'], 
                  $_POST['titulo_en'], 
                  $_POST['sub_titulo_en'], 
                  $_POST['descricao_en'],
                  $_FILES['img'], 
                  $_POST['desc_img_pt'], 
                  $_POST['desc_img_en'],
                  $_POST['data_noticia']);
        }
         
         
        $this->loadTemplate('noticias-editor', $dados);
     }
    

 }

?>