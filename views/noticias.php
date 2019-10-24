<div class="row" style="">
    <div class="col-md-12">
       <h5>Noticias</h5>
       <hr/>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
      <a href="http://<?php echo IP;?>/totenamcel/app/adm/noticias/novo"> Adicionar nova noticia </a>  
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Cod</th>
            <th scope="col">Titulo PT</th>
            <th scope="col">Sub Titulo PT</th>
            <th scope="col">Data Criação</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
            <tbody>
              <?php foreach($noticias as $e): ?>   
                <tr>
                    <th scope="row"><?php echo $e['cod_noticia'];?></th>
                    <td><?php echo utf8_encode($e['nome']);?></td>
                    <td><?php echo utf8_encode($e['descricao']);?></td>
                    <td><?php echo $e['data_criacao'];?></td>
                    <td>
                       <a href="http://<?php echo IP;?>/totenamcel/app/adm/noticias/editar/<?php echo $e['cod_noticia']; ?>"> <i data-toggle="modal" data-target="#exampleModal" class="fa fa-pencil-square-o edit-icon" ></i> </a>
                       <!-- <a href="http://<?php echo IP;?>/totenamcel/app/adm/noticias/deletar/<?php echo $e['cod_noticia']; ?>"> <i data-toggle="modal" data-target="#ExemploModalCentralizado"  class="fa fa-trash-o delete-icon" ></i></a> -->
                       <i  data-whatever="<?php echo $e['cod_noticia']; ?>"  data-toggle="modal" data-target="#modaldelete" class="fa fa-trash-o delete-icon" ></i>
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

