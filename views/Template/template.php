<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9">
    <script type="text/javascript" src="https://slideshow.triptracker.net/slide.js"></script>
    <link rel="stylesheet" href="/totenamcel/app/Assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS."style-admin.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_KEYBOARD."jquery.ml-keyboard.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo PLUGIN_KEYBOARD."demo.css";?>">
    
     <!-- CSS DataTables -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.bootstrap4.min.css">
   

    <!-- CSS summernote  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
   
    
    <title> Adm-Totem </title>
  
  </head>
  <body> 

  <?php if(strpos($_SERVER["REQUEST_URI"], 'login') == false):?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">AMCEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
          </li>

          <?php if($acesso[0]['status'] == "A"):?>
            <li class="nav-item active">
              <a class="nav-link" href="http://<?php echo IP;?>/totenamcel/app/adm/noticias"> Noticias <span class="sr-only">(current)</span></a>
            </li>
          <?php endif; ?>

          <?php if($acesso[1]['status'] == "A"):?>
            <li class="nav-item active">
              <a class="nav-link" href="http://<?php echo IP;?>/totenamcel/app/adm/apresentacoes"> Apresentações <span class="sr-only">(current)</span></a>
            </li>
          <?php endif; ?>

          <?php if($acesso[4]['status'] == "A"):?>
            <li class="nav-item active">
              <a class="nav-link" href="http://<?php echo IP;?>/totenamcel/app/adm/certificados"> Certificados <span class="sr-only">(current)</span></a>
            </li>
          <?php endif; ?>

          <?php if($acesso[3]['status'] == "A"):?>
            <li class="nav-item active">
              <a class="nav-link" href="http://<?php echo IP;?>/totenamcel/app/adm/contato"> Contato <span class="sr-only">(current)</span></a>
            </li>
          <?php endif; ?>

          <?php if($acesso[2]['status'] == "A"):?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                RQA
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://<?php echo IP;?>/totenamcel/app/adm/rqa/tipo_ocorrencias">Tipo de Ocorrencias </a>
                <a class="dropdown-item" href="http://<?php echo IP;?>/totenamcel/app/adm/rqa">RQA's Recebidos</a>
              </div>
            </li>
          <?php endif; ?>

          <?php if($_SESSION['usuario']['login'] === 'ADMIN' ):?>
            <li class="nav-item active">
              <a class="nav-link" href="http://<?php echo IP;?>/totenamcel/app/adm/user"> Usuários <span class="sr-only">(current)</span></a>
            </li>
          <?php endif;?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['usuario']['login'];?> 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://<?php echo IP;?>/totenamcel/app/adm/user">Perfil </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="http://<?php echo IP;?>/totenamcel/app/adm/user/logout">Sair</a>
            </div>
          </li>
        </ul>
        
      </div>
    </nav>
<?php endif; ?>
         <div   class="fadeIn container-fluid container-main" id="title1" > 
      <div class="row">
          <div class="col-md-12" style="background:#fff; height:500px;">
            <?php
              $this->loadViewInTemplate($viewName, $viewData);
            ?> 
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
    <!-- Data Tables -->
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    


    <script>
     

     $(document).ready(function() {
       
        $('#example').DataTable();
     } );
    </script>
     
     <script>
       (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
              getHTMLDescricao();
            }, false);
          });
        }, false);
      })();
      $(document).ready(function() {
          $('.summernote2').summernote();
      });
      $(document).ready(function() {
          $('.summernote1').summernote();
      });

      <?php if(strpos($_SERVER['REQUEST_URI'], 'noticias/editar')):?>

         

          var texto_pt = `<?php #echo $noticia['texto_pt'];?>'`;
          var texto_en = `<?php #echo $noticia['texto_en'];?>'`;
        
          $('.summernote1').summernote('code', `${texto_pt}`);
          $('.summernote2').summernote('code', `${texto_en}`);
        <?php endif; ?>
     
    </script>

    <script>
      $('#modaldelete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botão que acionou o modal
      var recipient = button.data('whatever') 
      var modal = $(this)

      modal.find('.modal-body input').val(recipient)
    })
    </script>
  </body>
</html> 
