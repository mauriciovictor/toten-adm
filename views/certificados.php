<?php 
  #var_dump($certificados);
?>

<div class="row" style="">
    <div class="col-md-12">
       <h5>Certificados</h5>
       <hr/>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
      <a href="http://<?php echo IP;?>/totenamcel/app/adm/certificados/novo"> Adicionar novo certificado </a>  
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
    <table class="table table-striped" id="example">
        <thead>
            <tr>
            <th scope="col">Cod</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Nome Arquivo</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
            <tbody>
              <?php foreach($certificados as $e): ?>   
                <tr>
                    <th scope="row"><?php echo $e['cod_certificado'];?></th>
                    <td><?php echo $e['nome_pt'];?></td>
                    <td><?php echo $e['descricao_pt'];?></td>
                    <td><?php echo $e['nome_arquivo'];?></td>
                    <td>
                       <a href="http://<?php echo IP;?>/totenamcel/app/adm/certificados/editar/<?php echo $e['cod_certificado']; ?>"> <i data-toggle="modal" data-target="#exampleModal" class="fa fa-pencil-square-o edit-icon" ></i> </a>
                        <i data-whatever="<?php echo $e['cod_certificado']; ?>" data-toggle="modal" data-target="#modaldelete"  class="fa fa-trash-o delete-icon" ></i>
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