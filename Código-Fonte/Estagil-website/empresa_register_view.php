<?php $_REQUEST['page'] = 'entrar';?>
<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Cadastre sua empresa</h2>
  </div>
</div>
<!-- banner -->


<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <form class="" action="" method="post">
          <input type="text" class="form-control" placeholder="Nome da Empresa" name="form_nome_empresa" required>
          <input type="email" class="form-control" placeholder="Email" name="form_email_empresa" required>
          <input type="text" class="form-control" placeholder="Telefone" name="form_telefone_empresa" required>
          <input type="text" class="form-control" placeholder="Área da Empresa" name="form_area_empresa" required>
          <input type="textarea" class="form-control" rows="15" placeholder="Forneça uma descrição de sua empresa" name="form_descricao_empresa"></textarea>
          
          <input type="textarea" rows="2" class="form-control" placeholder="Endereço" name="form_endereco_empresa" required></textarea>
          <input type="password" class="form-control" placeholder="Senha" name="form_senha_empresa" required>
          <input type="password" class="form-control" placeholder="Confirme sua senha" name="form_confirme_empresa" required>

          <button type="submit" class="btn btn-success" name="Sign">Criar conta</button>
        </form>


      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>
