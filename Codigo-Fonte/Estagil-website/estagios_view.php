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
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
              <h3>{{estagio.tituloVaga}}</h3>
              <h5>Empresa: {{estagio.nomeEmpresa}}</h5>
              <h5>Salário: {{estagio.salarioVaga | currency:"R$"}}</h5>
            </div>

            <button type="submit" class="btn-detalhe col-lg-3 col-md-3 col-sm-3 col-xs-4 btn btn-default"
              id="detalhe-btn" data-toggle="modal"
              data-target="#myModal" modal-login-empresa
              ng-click="getId(estagio.idVaga, estagio.nomeEmpresa)">
              Detalhes
            </button>

            <button type="submit" class="btn-inscrever col-lg-3 col-md-3 col-sm-3 col-xs-4 btn"
              id="inscrever-btn" ng-click="inscrever()">
              Inscrever
            </button>

            <div class="clearfix"></div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal"
    tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">

  <div id="modalDialog"
    class="modal-dialog" role="document" >

  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">{{detalhesEstagio.tituloVaga}}</h4> <!-- ANGULAR NAO FUNCIONA DAQUI PRA BAIXO-->
    </div>

    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-8">
            <h2></h2>
            <h4>Descrição da vaga</h4>
            <p>{{detalhesEstagio.descricaoVaga}}</p>
            <h4>Empresa</h4>
            <p>{{detalhesEstagio.nomeEmpresa}}</p>
            <h4>Requisitos</h4>
            <p>{{detalhesEstagio.requisitosVaga}}</p>
            <h4>Data de início</h4>
            <p>{{detalhesEstagio.dataInicio | date:'dd/MM/yyyy'}}</p>
            <h4>Auxílio Transporte</h4>
            <p> {{detalhesEstagio.auxilioTransporte == 0 ? "Não" : "Sim"}}</p>
            <h4>Auxílio Extra</h4>
            <p>{{detalhesEstagio.auxilioExtra == 0 ? "Não" : "Sim"}}</p>
            <!--<p>{{estagio.enderecoEmpresa}}</p>-->
            <div class="detalhe-vaga">
              <h4>Salário</h4>
              <p class="price"> {{detalhesEstagio.salarioVaga | currency:"R$"}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    </div>
  </div>
</div>
</div>

<!-- Fim do modal -->
</div>
<?php include'footer.php';?>
