<?php 
//   var_dump($tp_ocorrencias);
?>

<div class="row" >
    <div class="col-md-9" style="margin:0 auto;">
       <h5>Tipo Ocorrencia (RQA)</h5>
       <hr/>
    </div>
</div>

<div class="row">
    <div class="col-md-9" style="margin:0 auto;">
      <a href="http://<?php echo IP;?>/totenamcel/app/adm/rqa/tipo_ocorrencias/novo"> Novo </a>  
      <hr/>
    </div>
</div>

<div class="row">
    <div class="col-md-9" style="margin:0 auto; margin-bottom:100px; ">
    <table class="table table-striped" id="example">
        <thead>
            <tr>
            <th scope="col">Cod</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
            <tbody>
              <?php foreach($tp_ocorrencias as $e): ?>   
                <tr>
                    <th scope="row"><?php echo $e['cod_tp_ocorrencia'];?></th>
                    <td><?php echo $e['nome'];?></td>
                    <td>
                       <a href="http://<?php echo IP;?>/totenamcel/app/adm/rqa/tipo_ocorrencias/editar/<?php echo $e['cod_tp_ocorrencia']; ?>"> <i data-toggle="modal" data-target="#exampleModal" class="fa fa-pencil-square-o edit-icon" ></i> </a>
                        <i data-whatever="<?php echo $e['cod_tp_ocorrencia']; ?>" data-toggle="modal" data-target="#modaldelete"  class="fa fa-trash-o delete-icon" ></i>
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
            <h5 class="modal-title">Deletar Certificado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Confirma exclusão do registro?</p>
            <input text="teste" name="cod" style="display:;">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-danger">Salvar mudanças</button>
        </div>
        </div>
    </div>
  </form>
</div>