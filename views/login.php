<div class="row">
    
    <div class="col-md-4 login-form" style="margin:0 auto;  position:relative; top:100px;">
        <h4> ADM </h4>
        <form enctype="multipart/form-data" class="needs-validation" method="post" style="padding:10px;"  novalidate>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationCustom01">Login</label>
                    <input type="text" class="form-control" id="validationCustom01" name="login" placeholder="Digite o titulo" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationCustom02">Senha</label>
                    <input type="password" class="form-control" id="validationCustom02" name="senha" placeholder="Digite o titulo" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>
            </div>
            <?php if(isset($aviso) && $aviso <> ''): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $aviso; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            <?php endif;?>

            <button type="submit" class="btn btn-info">Entrar</button>
        </form>
    </div>
</div>

<?php
//   echo md5('p@55word');
//   var_dump($aviso);
?>