<?php $_REQUEST['page'] = 'estagios';?>
<?php include'header.php';?>
<!-- banner -->

<script src="assets/app/estagios_app.js"></script>

<script type="text/javascript">
estagios = JSON.parse( '<?php echo json_encode($estagios); ?>' );
</script>

<div ng-controller="estagiosCtrl">


<div class="inside-banner">
  <div class="container">
    <h2>Estagios</h2>
</div>
</div>
<!-- banner -->


<div class="container">
  <div class="spacer agents">

    <div class="row"  >
      <div class="col-lg-6  col-lg-offset-3  col-md-6 col-md-offset-3 col-sm-9 col-xs-10 col-xs-offset-1">
        <!-- agents -->
        <div class="row" ng-repeat="estagio in estagios">

          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><h3>{{estagio.tituloVaga}}</h3>
            <h5>Empresa: {{estagio.nomeEmpresa}}</h5>
            <h5>Salário: {{estagio.salarioVaga | currency:"R$"}}</h5>

            <!--
            <span>Área: {{estagio.areaVaga}}</span><br>
            <span>Empresa: {{estagio.nomeEmpresa}}</span><br>
            <span>Início: {{estagio.dataInicio}}</span><br>
            <span>Descrição: {{estagio.descricaoVaga}}</span><br>
            <span>Salário: {{estagio.areaVaga}}</span><br>
            <span>Auxilio Transporte: {{estagio.auxilioTrasporte?"sim":"não"}}</span><br>
            <span>Auxilio Extra: {{estagio.auxilioExtra}}</span><br>
            <span>Endereço: {{estagio.enderecoVaga}}</span><br>
            <span>Requisitos: {{estagio.requisitosVaga}}</span><br>
            -->
          </div>
          <button type="button" class="btn-detalhe col-lg-3 col-md-3 col-sm-3 col-xs-4 btn btn-default" id="detalhe-btn">
            Detalhes
          </button>
          <button type="button" class="btn-inscrever col-lg-3 col-md-3 col-sm-3 col-xs-4 btn">
            Inscrever
          </button>


            <div class="clearfix"></div>
            <hr>

          </div>
        </div>
      </div>

    </div>
  </div>


</div>



<?php include'footer.php';?>
