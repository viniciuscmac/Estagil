<?php $_REQUEST['page'] = 'empresas';?>
<?php include'header.php';?>


<script src="assets/app/empresas_app.js"></script>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Empresas Cadastradas</h2>
  </div>
</div>
<!-- banner -->

<div class="container">
  <div class="spacer agents">

    <div class="row" ng-app="empresasApp" ng-controller="empresaCtrl">
      <div class="col-lg-8  col-lg-offset-2 col-sm-12">
        <!-- agents -->
        <div class="row" ng-repeat="empresa in empresas">
          <div class="col-lg-2 col-sm-2 "><a href="#"><img ng-src="images/empresas/{{empresa.logo}}" class="img-responsive"  alt="agent name"></a></div>
          <div class="col-lg-7 col-sm-7 "><h4>{{empresa.nome}}</h4><p>{{empresa.descricao}}</p></div>
          <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">{{empresa.email}}</a><br>
            <span class="glyphicon glyphicon-earphone"></span>{{empresa.telefone}}</div>
          </div>
          <!-- agents -->
        </div>
      </div>
    </div>
  </div>

<?php include'footer.php';?>
