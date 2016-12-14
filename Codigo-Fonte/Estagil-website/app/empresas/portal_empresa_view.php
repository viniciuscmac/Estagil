<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include$path.'/' . 'header.php';?>

<script type="text/javascript">
empresa = JSON.parse( '<?php echo json_encode($empresa); ?>' );

vagas = JSON.parse( '<?php echo json_encode($vagas); ?>' );
</script>

<script src="portal_empresa.controller.js"></script>

<div ng-controller="PortalEmpresaController">
  <div class="row">

    <div class="col-sm-2 sidebar-padding">
      <nav class="nav-sidebar">
        <ul class="nav">
          <li ><a href="perfil_empresa.php">Editar perfil</a></li>
          <li ><a href="/app/estagios/vagas_register.php">Cadastrar Nova Vaga</a></li>
          <li class="nav-divider"></li>
        </ul>
      </nav>
    </div>


    <div class="container portal" ng-controller="PortalEmpresaController as portalCtrl">
      <div class="col-lg-9 col-sm-9 portal-main-view">
        <div class="spacer-portal">
          <div class="col-lg-offset-1">
            <h2>Vagas Cadastradas</h2>

            <div ng-show="portalCtrl.temVagas()">
              <!-- agents -->
              <div class="row" ng-repeat="vaga in portalCtrl.vagas">

                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><h3>Nome da vaga: {{vaga.tituloVaga}}</h3>
                  <h5>Salário: {{vaga.salarioVaga | currency:"R$"}}</h5>
                </div>

                <button type="submit" class="btn-detalhe col-lg-3 col-md-3 col-sm-3 col-xs-4 btn btn-default"
                id="detalhe-btn">
                Editar
              </button>

              <button type="submit" class="btn-deletar col-lg-3 col-md-3 col-sm-3 col-xs-4 btn" ng-click="portalCtrl.deletarVaga(vaga.idVaga)">
                Deletar vaga
              </button>
              <div class="clearfix"></div>
              <hr>

            </div>
          </div> <!-- temvagas() -->


          <div ng-show="!portalCtrl.temVagas()" class="spacer-feedback">
            <h4>Sua empresa ainda não possui vagas cadastradas!</h4><br>
            <button class="btn-criar-nova btn btn-default" onclick="location.href='/app/estagios/vagas_register.php';"
            type="button" name="button" >
            Criar nova vaga
            </button>
          </div>

        </div>
      </div> <!-- spacer-portal -->
    </div>
  </div> <!-- container portal -->
</div>
</div> <!-- Controler -->





<?php include$path.'/' . 'footer.php';?>
