<?php $_REQUEST['page'] = 'empresas';?>
<?php include'header.php';?>


<script src="assets/app/empresas_app.js"></script>
<!-- banner -->


<script type="text/javascript">
empresas = JSON.parse( '<?php echo json_encode($empresas); ?>' );
</script>

<div ng-app="empresasApp"  ng-controller="empresaCtrl">


  <div class="inside-banner" >
    <div class="container">
      <h2>Empresas Cadastradas</h2>
    </div>
  </div>
  <!-- banner -->

  <div class="container">
    <div class="spacer agents">

      <div class="row"  >
        <div class="col-lg-8  col-lg-offset-2 col-sm-12">
          <!-- agents -->
          <div class="row" ng-repeat="empresa in empresas">

            <div class="col-lg-offset-2 col-lg-7  col-sm-offset-2 col-sm-7 "><h3>{{empresa.nomeEmpresa}}</h3> <span>Área: {{empresa.areaEmpresa}}</span><br><span>Endereço: {{empresa.enderecoEmpresa}}</span></div>
            <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com"> {{empresa.email}}</a><br>
              <span class="glyphicon glyphicon-earphone"></span> {{empresa.foneEmpresa}}</div>

              <div class="clearfix"></div>
              <hr>

            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <?php include'footer.php';?>
