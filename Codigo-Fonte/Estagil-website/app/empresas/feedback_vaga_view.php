<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include$path.'/' . 'header.php';?><!-- banner -->

<!-- banner -->

<div class="container">
  <div class="spacer-feedback">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <center><h3>Sua vaga foi criada com sucesso!</h3><br>
        <button class="btn btn-default" onclick="location.href='/app/empresas/portal_empresa.php';" type="button" name="button">Voltar à página inicial</button><br><br>
        <button class="btn btn-default btn-criar-nova" onclick="location.href='/app/estagios/vagas_register.php';" type="button" name="button">Criar nova vaga</button></center>
      </div>
    </div>
  </div>
</div>
<?php include$path.'/' . 'footer.php';?>
