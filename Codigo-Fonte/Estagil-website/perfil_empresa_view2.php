<?php include'header.php';?>

<script src="assets/app/perfil_empresa_app.js"></script>


<script type="text/javascript">
var empresa = JSON.parse( '<?php echo json_encode($empresa); ?>' );
</script>

<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Perfil</h2>
  </div>
</div>
<!-- banner -->

<div ng-controller="PerfilEmpresaController as perfilCtrl">

  <div class="container">
    <div class="spacer">
      <div class="row register">
        <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

          <form class="" action="" method="post">
          <?php
            foreach ($info as $row) {
            echo '<input type="text" class="form-control" placeholder="Nome da Empresa" name="form_nome_empresa" value="'.$row['nomeEmpresa'].'" required>';
            echo '<input type="email" class="form-control" placeholder="Email" name="form_email_empresa" value="'.$row['emailEmpresa'].'" required>';
            echo '<input type="text" class="form-control" placeholder="Telefone" name="form_telefone_empresa" value="'.$row['foneEmpresa'].'" required>';
            echo '<input type="text" class="form-control" placeholder="Área da Empresa" name="form_area_empresa" value="'.$row['areaEmpresa'].'" required>';
            echo '<input type="textarea" class="form-control" rows="15" placeholder="Forneça uma descrição de sua empresa" name="form_descricao_empresa" value="'.$row['descricaoEmpresa'].'" required ></textarea>';

            echo '<input type="textarea" rows="2" class="form-control" placeholder="Endereço" name="form_endereco_empresa" value="'.$row['enderecoEmpresa'].'" ></textarea>';
            echo '<input type="password" class="form-control" placeholder="Senha" name="form_senha_empresa" value="'.$row['password'].'" required>';
            echo '<input type="password" class="form-control" placeholder="Confirme sua senha" name="form_confirme_empresa" value="'.$row['password'].'" required>';
            }
            ?>

            <button type="submit" class="btn btn-success" name="Save" >Salvar</button>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>

<?php include'footer.php';?>
