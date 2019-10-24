<?php
  echo md5('p@55word');
?>
<div style="padding-top:10px;" class="row card1">
  <div class="col-md-3">
    <div class="open">
      <div class="title-card">
         <h5>Hoje</h5>
      </div>
      <div class="title-card-quant">
        <h3><?php echo $tot_hj; ?> </h3>
      </div>
      <div class="titlo-card-icon">
        <i class="fa fa-calendar" ></i>
      </div>  
    </div>
  </div>
  <div class="col-md-3">
    <div class="open">
      <div class="title-card">
         <h5>Atendidos</h5>
      </div>
      <div class="title-card-quant">
        <h3><?php echo $tot_atend; ?> </h3>
      </div>
      <div class="titlo-card-icon">
        <i class="fa fa-calendar-check-o" ></i>
      </div>  
    </div>
  </div>
  <div class="col-md-3">
    <div class="open">
      <div class="title-card">
         <h5>Não atendidos</h5>
      </div>
      <div class="title-card-quant">
        <h3><?php echo $tot_n_atend; ?> </h3>
      </div>
      <div class="titlo-card-icon">
        <i class="fa fa-calendar-times-o" ></i>
      </div>  
    </div>
  </div>
</div>


<div class="row" style="">
    <div class="col-md-12" style="margin:0 auto;">
       <h5>RQA Recebidos</h5>
       <hr/>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="margin:0 auto; margin-bottom:100px;">
    <table class="table table-striped" id="example" >
        <thead>
            <tr>
            <th scope="col">Cod</th>
            <th scope="col">Descricao</th>
            <th scope="col">Sugestão</th>
            <th scope="col">Data data envio</th>
            <th scope="col">Tipo Ocorrencia</th>
            <th scope="col">Data Resolvido:</th>
            <th scope="col">Atendido</th>
            </tr>
        </thead>
            <tbody>
              <?php foreach($rqa as $e): ?>   
                <tr>
                    <th scope="row"><?php echo $e['cod_rqg'];?></th>
                    <td><?php echo utf8_encode($e['descricao']);?></td>
                    <td><?php echo utf8_encode($e['sugestao']);?></td>
                    <td><?php echo $e['data_envio'];?></td>
                    <td><?php echo $e['cod_rqa_tp_ocorrencia'];?></td>
                    <td><?php echo $e['data_resolvido'];?></td>
                    <td>
                       <!-- <a href="http://<?php echo IP;?>/totenamcel/app/adm/noticias/ver/<?php echo $e['cod_rqg']; ?>"> <i data-toggle="modal" data-target="#exampleModal" class="fa fa-pencil-square-o edit-icon" ></i> </a> -->
                       <!-- <a href="http://<?php echo IP;?>/totenamcel/app/adm/noticias/deletar/<?php echo $e['cod_noticia']; ?>"> <i data-toggle="modal" data-target="#ExemploModalCentralizado"  class="fa fa-trash-o delete-icon" ></i></a> -->
                       <form method="post">
                            <?php if(!empty($e['data_resolvido'])):?>
                                    <input type="checkbox" onChange="this.form.submit()" name="resolvido" value="<?php echo $e['cod_rqg']; ?>" checked >
                                    <input style="display:none;" type="text" name="resolvido" value="<?php echo $e['cod_rqg']; ?>">
                            <?php elseif($e['data_resolvido'] == null): ?>
                                    <input type="checkbox" onChange="this.form.submit()" name="resolvido" value="<?php echo $e['cod_rqg']; ?>" >
                            <?php endif;?>
                       </form>
                    </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table> 
    </div>
</div>


<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog">
  <form method="post" >  
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Deletar Nóticia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Confirma exclusão do registro?</p>
            <input text="teste" name="cod" style="display:none;">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-danger">Salvar mudanças</button>
        </div>
        </div>
    </div>
  </form>
</div>


