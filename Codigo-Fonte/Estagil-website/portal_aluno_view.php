<?php include'header.php';?>


<script src="assets/app/portal_aluno_app.js"></script>

<script type="text/javascript">
var aluno = JSON.parse( '<?php echo json_encode($aluno); ?>' );
</script>

<div ng-controller="PortalAlunoController">

  <div class="row">

    <div class="col-sm-2 sidebar-padding">
      <nav class="nav-sidebar">
        <ul class="nav">
          <li ><a href="estagios.php">Procurar Vagas</a></li>
          <li ><a href="perfil_aluno.php">Editar perfil</a></li>
          <li class="nav-divider"></li>
        </ul>
      </nav>
    </div>


    <div class="container portal">
      <div class="col-lg-9 col-sm-9 portal-main-view">
        <div class="spacer-portal">
          <div class="col-lg-offset-1">
            <h2>Minhas inscrições</h2>

            <!-- agents -->
            <div class="row" >

              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><h3>Nome da vaga: {{estagio.tituloVaga}}</h3>
                <h5>Empresa: {{estagio.nomeEmpresa}}</h5>
                <h5>Salário: {{estagio.salarioVaga | currency:"R$"}}</h5>
              </div>

              <button type="submit" class="btn-detalhe col-lg-3 col-md-3 col-sm-3 col-xs-4 btn btn-default"
              id="detalhe-btn" data-toggle="modal"
              data-target="#myModal" modal-login-empresa
              ng-click="getId(estagio.idVaga, estagio.nomeEmpresa)">
              Detalhes
            </button>

            <button type="submit" class="btn-cancelar col-lg-3 col-md-3 col-sm-3 col-xs-4 btn">
              Cancelar Inscrição
            </button>
            <div class="clearfix"></div>
            <hr>

          </div>
        </div>
      </div> <!-- spacer-portal -->
    </div>
  </div> <!-- container portal -->
</div>



</div>





<?php include'footer.php';?>
