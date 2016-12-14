
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
 include $path.'/'.'header.php';?><!-- banner -->

 <script src="estagios.controller.js"></script>

 <script type="text/javascript">
 estagios = JSON.parse( '<?php echo json_encode($estagios); ?>' );
 </script>

<div ng-controller="EstagiosController as estagiosCtrl">

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
          <div class="row" ng-repeat="estagio in estagiosCtrl.estagios">

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><h3>{{estagio.tituloVaga}}</h3>
              <h5>Empresa: {{estagio.nomeEmpresa}}</h5>
              <h5>Salário: {{estagio.salarioVaga | currency:"R$"}}</h5>
            </div>

            <button type="submit" class="btn-detalhe col-lg-3 col-md-3 col-sm-3 col-xs-4 btn btn-default"
              id="detalhe-btn" data-toggle="modal"
              data-target="#myModal" modal-login-empresa
              ng-click="estagiosCtrl.getId(estagio.idVaga, estagio.nomeEmpresa)">
              Detalhes
            </button>

            <a href= '../login/login.php' ng-class="{hidden: userLogado}">
              <button type="submit" class="btn-inscrever col-lg-3 col-md-3 col-sm-3 col-xs-4 btn"
              id="inscrever-btn-login">
              Inscrever
            </button></a>

            <a ng-class="{hidden: !userLogado}">
              <button type="submit" class="btn-inscrever col-lg-3 col-md-3 col-sm-3 col-xs-4 btn"
              id="inscrever-btn-inscrever" ng-click="estagiosCtrl.inscreverVaga(estagio.idVaga);">
              Inscrever
            </button></a>

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

    <h4 class="modal-title" id="myModalLabel">{{estagiosCtrl.detalhesEstagio.tituloVaga}}</h4> <!-- ANGULAR NAO FUNCIONA DAQUI PRA BAIXO-->
  </div>

  <div class="modal-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-sm-8">
          <h2></h2>
          <h4>Descrição da vaga</h4>

          <p>{{estagiosCtrl.detalhesEstagio.descricaoVaga}}</p>
          <h4>Empresa</h4>
          <p>{{estagiosCtrl.detalhesEstagio.nomeEmpresa}}</p>
          <h4>Requisitos</h4>
          <p>{{estagiosCtrl.detalhesEstagio.requisitosVaga}}</p>
          <h4>Data de início</h4>
          <p>{{estagiosCtrl.detalhesEstagio.dataInicio | date:'dd/MM/yyyy'}}</p>
          <h4>Auxílio Transporte</h4>
          <p> {{estagiosCtrl.detalhesEstagio.auxilioTransporte == 0 ? "Não" : "Sim"}}</p>
          <h4>Auxílio Extra</h4>
          <p>{{estagiosCtrl.detalhesEstagio.auxilioExtra == 0 ? "Não" : "Sim"}}</p>
          <!--<p>{{estagio.enderecoEmpresa}}</p>-->
          <div class="detalhe-vaga">
            <h4>Salário</h4>
            <p class="price"> {{estagiosCtrl.detalhesEstagio.salarioVaga | currency:"R$"}}</p>


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


<?php include$path.'/' . 'footer.php';?>
