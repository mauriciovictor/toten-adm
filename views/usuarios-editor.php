<?php if(strpos($_SERVER['REQUEST_URI'], 'novo')):?>
<script>
   function getHTMLDescricao(){
        var summernote2 = $('.summernote2').summernote('code');
        document.querySelector('#text-html').innerHTML = summernote2;

        var summernote1 = $('.summernote1').summernote('code');
        document.querySelector('#text-html1').innerHTML = summernote1;
   }
</script>

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


<form enctype="multipart/form-data" class="needs-validation" method="post"  novalidate>
<h5> Modulos </h5>
<hr/>
<?php $cont = 0; foreach($modulos as $m): ?>
    <?php $cont += 1;?>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="modulo[]" class="custom-control-input" value="<?php echo $m['cod_modulo'];?>" id="customCheck<?php echo $cont;?>">
        <label name="modulo[]" for="customCheck<?php echo $cont;?>" class="custom-control-label" ><?php echo $m['nome'];?></label>
    </div>
<?php endforeach;?>
<hr/>
<h5> Dados </h5>
<hr/>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Nome:</label>
            <input type="text" class="form-control" name="nome" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Login:</label>
            <input type="text" class="form-control" name="login" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationCustom01">Email:</label>
            <input type="text" class="form-control" name="email" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Senha:</label>
            <input type="password" class="form-control" name="senha" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-info"> Salvar </button>
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

<form enctype="multipart/form-data" class="needs-validation" method="post"  novalidate >
<h5> Modulos </h5>
<hr/>
<?php $cont = 0; foreach($usuario_acesso as $a): ?>
        <?php if($a['status'] == 'A' ):?>
            <!-- <label for="">
                <?php #echo $a['nome'];?>
            </label> 
            <input type="checkbox" name="modulo[]"  value="<?php echo $a['cod_modulo']; ?>" checked > -->
            <?php $cont += 1;?>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="modulo[]" class="custom-control-input" value="<?php echo $a['cod_modulo'];?>" id="customCheck<?php echo $cont;?>" checked>
                <label name="modulo[]" for="customCheck<?php echo $cont;?>" class="custom-control-label" ><?php echo $a['nome'];?></label>
            </div>
            <!-- <input style="display:block;" type="text" name="modulo[]" value="<?php echo $a['cod_modulo']; ?>"> -->
        <?php elseif($a['status'] == 'I'): ?>
            <?php $cont += 1;?>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="modulo[]" class="custom-control-input" value="<?php echo $a['cod_modulo'];?>" id="customCheck<?php echo $cont;?>" >
                <label name="modulo[]" for="customCheck<?php echo $cont;?>" class="custom-control-label" ><?php echo $a['nome'];?></label>
            </div>
        <?php endif;?>
    <?php endforeach;?>
<hr/>
<h5> Dados </h5>
<hr/>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Nome:</label>
            <input type="text" value="<?php echo utf8_encode($usuario['nome']);?>" class="form-control" name="nome" id="validationCustom01" placeholder="Digite o titulo" required disabled>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Login:</label>
            <input type="text" value="<?php echo utf8_encode($usuario['login']);?>" class="form-control" name="login" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <label for="validationCustom01">Email:</label>
            <input type="text" value="<?php echo utf8_encode($usuario['email']);?>" class="form-control" name="email" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Senha:</label>
            <input type="password" value="<?php echo utf8_encode($usuario['senha']);?>" class="form-control" name="senha" id="validationCustom01" placeholder="Digite o titulo" required>
            <div class="valid-feedback">
                Tudo certo!
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-info"> Salvar </button>
</form>

<?php endif;?>

<!-- <?php
//   var_dump($_POST['modulo']);
//   foreach($_POST['modulo'] as $t){
//      echo $t;
//   }
?> -->