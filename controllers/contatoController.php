<?php

 namespace app\adm\Controller;
 use app\models\emailsModel;

 class contatoController extends Controller{
     public function __construct(){
         $dados = array();
         
         $email = new emailsModel();

         $dados['emails_enviados'] = $email->getEmailsEnviados();
         $dados['tot_hj'] = $email->getTotalContatoHJ();
        $this->loadTemplate('contato', $dados);
     }

 }

?>