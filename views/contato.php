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
</div>

<div class="row">
    <div class="col-md-12" style="margin:0 auto; margin-bottom:100px; ">
    <br/>
    <h5> Emails Enviados </h5>
    <hr/>
    <table class="table table-striped" id="example"> 
        <thead>
            <tr>
            <th scope="col">Cod:</th>
            <th scope="col">Nome:</th>
            <th scope="col">Sobrenome:</th>
            <th scope="col">email:</th>
            <th scope="col">Mensagem:</th>
            <th scope="col">Data Envio:</th>
            <!-- <th scope="col"> Respondido </th>
            <th scope="col"> Ações </th> -->
            </tr>
        </thead>
            <tbody>
              <?php foreach($emails_enviados as $e): ?>   
                <tr>
                    <th scope="row"><?php echo $e['cod_email'];?></th>
                    <td><?php echo $e['nome'];?></td>
                    <td><?php echo $e['sobrenome'];?></td>
                    <td><?php echo $e['email'];?></td>
                    <td><?php echo $e['mensagem'];?></td>
                    <td><?php echo $e['data_envio'];?></td>
                    <!-- <td><?php echo $e['data_envio'];?></td>
                    <th scope="col"> Ações </th> -->
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>