
<?php if(strpos($_SERVER['REQUEST_URI'], 'novo')):?>
<script>
   function getHTMLDescricao(){
        var summernote2 = $('.summernote1').summernote('code');
        document.querySelector('#text-html1').innerHTML = summernote2;

        var summernote1 = $('.summernote2').summernote('code');
        document.querySelector('#text-html2').innerHTML = summernote1;
   }
</script>

<?php if(isset($aviso) && $aviso == 'Salvo com sucesso'):?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Salvo com sucesso</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php else: ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Erro ao salvar!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
<?php endif;?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Portugues</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ingles</a>
  </li>
</ul>
<form enctype="multipart/form-data" class="needs-validation" method="post"  novalidate>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom01">Titulo Noticia</label>
            <input type="text" class="form-control" id="validationCustom01" name="titulo_pt" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationCustom02">Sub Titulo Noticia</label>
            <input type="text" class="form-control" id="validationCustom02" name="sub_titulo_pt" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationCustom03">data Noticia</label>
            <input type="date" class="form-control" id="validationCustom03" name="data_noticia" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTextarea">Descrição Noticia:</label>
            <textarea class="summernote1 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html1" name="descricao_pt"> </textarea>
            <div class="invalid-feedback">
                Preencher!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Descrição imagem</label>
            <input type="text" class="form-control" name="desc_img_pt" id="validationCustom04" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom05">Titulo Noticia</label>
            <input type="text" class="form-control" id="validationCustom05" name="titulo_en" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationCustom06">Sub Titulo Noticia</label>
            <input type="text" class="form-control" id="validationCustom06" name="sub_titulo_en" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationCustom07">data Noticia</label>
            <input type="date" class="form-control" id="validationCustom07" name="data_noticia" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTextarea">Descrição Noticia:</label>
            <textarea class="summernote2 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html2" name="descricao_en"> </textarea>
            <div class="invalid-feedback">
                Preencher!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom08">Descrição imagem</label>
            <input type="text" class="form-control" name="desc_img_en" id="validationCustom08" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
</div>

<input type="file" name="img">

<button class="btn btn-info" type="submit">Enviar</button>
</form>




<?php elseif(strpos($_SERVER['REQUEST_URI'], 'editar')):?>
<script>
   function getHTMLDescricao(){
        var summernote2 = $('.summernote1').summernote('code');
        document.querySelector('#text-html1').innerHTML = summernote2;

        var summernote1 = $('.summernote2').summernote('code');
        document.querySelector('#text-html2').innerHTML = summernote1;
   }

</script>

<?php if(isset($aviso) && $aviso == 'Alterado com sucesso'):?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Salvo com sucesso</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php elseif(isset($aviso) && $aviso == 'Erro ao Alterar'): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Erro ao salvar!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
<?php endif;?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Portugues</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ingles</a>
  </li>
</ul>
<form enctype="multipart/form-data" class="needs-validation" method="post"  novalidate>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom01">Titulo Noticia</label>
            <input type="text" value="<?php echo utf8_encode($noticia['titulo_pt']);?>" class="form-control" id="validationCustom01" name="titulo_pt" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationCustom02">Sub Titulo Noticia</label>
            <input type="text" value="<?php echo utf8_encode($noticia['sub_titulo_pt']);?>" class="form-control" id="validationCustom02" name="sub_titulo_pt" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationCustom03">data Noticia</label>
            <input type="date" value="<?php echo date('Y-m-d', strtotime($noticia['data_noticia']));?>" class="form-control" id="validationCustom03" name="data_noticia" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTextarea">Descrição Noticia:</label>
            <textarea class="summernote1 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html1" name="descricao_pt"> </textarea>
            <div class="invalid-feedback">
                Preencher!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Descrição imagem</label>
            <input type="text" value="<?php echo utf8_encode($noticia['desc_img_pt']);?>" class="form-control" name="desc_img_pt" id="validationCustom04" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom05">Titulo Noticia</label>
            <input type="text" value="<?php echo utf8_encode($noticia['titulo_en']);?>" class="form-control" id="validationCustom05" name="titulo_en" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationCustom06">Sub Titulo Noticia</label>
            <input type="text" value="<?php echo utf8_encode($noticia['sub_titulo_en']);?>" class="form-control" id="validationCustom06" name="sub_titulo_en" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationCustom07">data Noticia</label>
            <input type="date" class="form-control" value="<?php echo date('Y-m-d', strtotime($noticia['data_noticia']));?>" id="validationCustom07" name="data_noticia" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTextarea">Descrição Noticia:</label>
            <textarea class="summernote2 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html2" name="descricao_en"> </textarea>
            <div class="invalid-feedback">
                Preencher!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom08">Descrição imagem</label>
            <input type="text" value="<?php echo utf8_encode($noticia['desc_img_en']);?>"  class="form-control" name="desc_img_en" id="validationCustom08" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
</div>

<input type="file" name="img">

<button class="btn btn-info" type="submit">Enviar</button>
</form>
<?php endif;?>
<div style="height:100px;">
</div>


