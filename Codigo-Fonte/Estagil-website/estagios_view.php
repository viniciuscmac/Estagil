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
      <div class="col-lg-8  col-lg-offset-2 col-sm-12">
        <!-- agents -->
        <div class="row" ng-repeat="estagio in estagios">

          <div class="col-lg-offset-2 col-lg-7  col-sm-offset-2 col-sm-7 "><h3>Estágio: {{estagio.idVaga}}</h3>
            <span>Descrição: {{estagio.descricaoVaga}}</span><br>

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


            <div class="clearfix"></div>
            <hr>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php include'footer.php';?>
