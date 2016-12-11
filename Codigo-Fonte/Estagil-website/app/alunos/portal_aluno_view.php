<?php include'header.php';?>


<script src="/app/alunos/portal_aluno.controller.js"></script>

<script type="text/javascript">
var aluno = JSON.parse( '<?php echo json_encode($aluno); ?>' );
</script>

<div ng-controller="PortalAlunoController">




  <div class="container portal">


    <div class="row">
      <div class="col-lg-2 col-sm-4 sidebar">

        <div class="spacer">
          <h4>Bem vindo</h4>
          <div class="row">
            <div class="col-lg-12 col-sm-5">
              <ul class="list-unstyled">
                <li><a href="/app/alunos/perfil_aluno.php">Editar perfil</a></li>
                <li><a href="#">Ver minhas inscrições</a></li>

              </ul></div>

            </div>
          </div>
        </div>

        <div class="spacer">



          <div class="col-lg-8 col-lg-offset-1 col-sm-8 ">

            <h2>Vagas Cadastradas</h2>
            <div class="row">
              <div class="col-lg-8"> AQUI MOSTRA A LISTA DE VAGAS CADASTRADAS PELA EMPRESA
              </div>

            </div>
          </div>

        </div>
      </div>











      <!-- Pagina da lista de estagios


      <div class="col-lg-6">
      <div style="border-left:1px solid #000;height:500px"></div>
      <div class="container">
      <h2>Estagios</h2>
    </div>
  </div>



  <div class="container">
  <div class="spacer agents">

  <div class="row"  >
  <div class="col-lg-6  col-lg-offset-3  col-md-6 col-md-offset-3 col-sm-9 col-xs-10 col-xs-offset-1">
  <
  <div class="row" ng-repeat="estagio in estagios">

  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><h3>{{estagio.tituloVaga}}</h3>
  <h5>Empresa: {{estagio.nomeEmpresa}}</h5>
  <h5>Salário: {{estagio.salarioVaga | currency:"R$"}}</h5>
</div>



<button type="submit" class="btn-detalhe col-lg-3 col-md-3 col-sm-3 col-xs-4 btn btn-default"
id="detalhe-btn" data-toggle="modal"
data-target="#myModal" modal-login-empresa
ng-click="getId(estagio.idVaga, estagio.nomeEmpresa)">
Detalhes
</button>

<button type="submit" class="btn-inscrever col-lg-3 col-md-3 col-sm-3 col-xs-4 btn">
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
</div>
</div>
-->
</div>
</div>





<?php include'footer.php';?>
