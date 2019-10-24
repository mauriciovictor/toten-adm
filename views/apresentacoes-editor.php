<?php if(strpos($_SERVER['REQUEST_URI'], 'novo')):?>
<!-- <script>
   function getHTMLDescricao(){
        var summernote2 = $('.summernote2').summernote('code');
        document.querySelector('#text-html').innerHTML = summernote2;

        var summernote1 = $('.summernote1').summernote('code');
        document.querySelector('#text-html1').innerHTML = summernote1;
   }
</script> -->

<?php if(isset($aviso) && $aviso == 'Salvo com sucesso'):?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Salvo com sucesso</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php elseif(isset($aviso) && $aviso == 'Erro ao salvar!'): ?>
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
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Titulo:</label>
            <input type="text" class="form-control" name="nome_pt" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    
    <!-- <div class="form-row">
        <div class="col-md-12 mb-3">
        <label for="validationTextarea">Textarea</label>
            <textarea class="summernote2 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html" name="descricaoPT"> </textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>
    </div> -->
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Titulo Certificado</label>
            <input type="text" class="form-control" id="validationCustom01" name="nome_en" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <!-- <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTextarea">Textarea</label>
            <textarea class="summernote1 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html1" name="descricaoEN"> </textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>
    </div> -->
</div>
<div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom06">Nome Pasta:</label>
            <input type="text"  class="form-control" id="validationCustom01" name="nome_pasta" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
<button class="btn btn-info" type="submit">Enviar</button>
</form>



<?php elseif(strpos($_SERVER['REQUEST_URI'], 'editar')):?>
<script>
   function getHTMLDescricao(){
        var summernote2 = $('.summernote2').summernote('code');
        document.querySelector('#text-html').innerHTML = summernote2;

        var summernote1 = $('.summernote1').summernote('code');
        document.querySelector('#text-html1').innerHTML = summernote1;
   }
</script>

<?php if(isset($aviso) && $aviso == 'Alterado com sucesso'):?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Salvo com sucesso</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php elseif(isset($aviso) && $aviso == 'Erro ao alterar'): ?>
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
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Titulo </label>
            <input type="text" value="<?php echo utf8_encode($apresentacao['titulo_pt']);?>" class="form-control" name="nome_pt" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <!-- <div class="form-row">
        <div class="col-md-12 mb-3">
        <label for="validationTextarea">Textarea</label>
            <textarea class="summernote2 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html" name="descricaoPT"> </textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>
    </div> -->
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom05">Titulo:</label>
            <input type="text" value="<?php echo utf8_encode($apresentacao['titulo_en']);?>" class="form-control" id="validationCustom01" name="nome_en" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <!-- <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTextarea">Textarea</label>
            <textarea class="summernote1 form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <textarea style="display:none;" id="text-html1" name="descricaoEN"> </textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>
    </div> -->
</div>

<div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom06">Nome Pasta:</label>
            <input type="text" value="<?php echo utf8_encode($apresentacao['nome_pasta']);?>" class="form-control" id="validationCustom01" name="nome_pasta" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
<button class="btn btn-info" type="submit">Enviar</button>
</form>
<?php endif;?>
