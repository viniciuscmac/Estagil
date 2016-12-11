<?php include'header.php';?>

<script src="/app/alunos/perfil_aluno.controller.js"></script>


<script type="text/javascript">
var aluno = JSON.parse( '<?php echo json_encode($aluno); ?>' );
</script>

<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Perfil</h2>
  </div>
</div>
<!-- banner -->

<div ng-controller="PerfilAlunoController as perfilCtrl">

  <div class="container">
    <div class="spacer">
      <div class="row register">
        <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

          <form class="" action="" method="post">
            <input type="text" class="form-control" placeholder="Nome Completo" name="form_nome" ng-model="perfilCtrl.aluno.nomeAluno" ng-disabled="!perfilCtrl.editar" required>
            <input type="email" class="form-control" placeholder="Email" name="form_email" ng-model="perfilCtrl.aluno.emailAluno" ng-disabled="!perfilCtrl.editar" required>
            <input type="text" class="form-control" placeholder="Telefone" name="form_telefone" ng-model="perfilCtrl.aluno.foneAluno" ng-disabled="!perfilCtrl.editar" required>
            <input type="text" class="form-control" placeholder="Curso" name="form_curso" ng-model="perfilCtrl.aluno.cursoAluno" ng-disabled="!perfilCtrl.editar" required>

            <div class="periodo">
              <h4>Período</h4>
              <select class="form-control" name="form_periodo" ng-options="o.name for o in perfilCtrl.options track by o.id" ng-model="perfilCtrl.selectedOption" ng-disabled="!perfilCtrl.editar" ng-change="perfilCtrl.setSemestre()"></select>
              selectedOption: {{perfilCtrl.selectedOption}}
              semestreAluno: {{perfilCtrl.aluno.semestreAluno}}
            </div>

            <textarea rows="2" class="form-control" placeholder="Endereço" name="form_endereco" ng-model="perfilCtrl.aluno.enderecoAluno" ng-disabled="!perfilCtrl.editar" required></textarea>
            <input type="password" class="form-control" placeholder="Senha" name="form_senha" ng-model="perfilCtrl.aluno.password" ng-disabled="!perfilCtrl.editar" required>
            <input type="password" class="form-control" placeholder="Confirme sua senha" name="form_confirme" ng-disabled="!perfilCtrl.editar" required>

            <button type="button" class="btn btn-default" name="Edit" ng-show="!perfilCtrl.editar" ng-click="perfilCtrl.setEditar()">Editar</button>
            <button ng-show="perfilCtrl.editar" type="button" class="btn btn-default" name="Cancel"  ng-click="perfilCtrl.setEditar()">Cancelar</button>
            <br><button type="submit" class="btn btn-success" name="Save" ng-show="perfilCtrl.editar">Salvar</button>
          </form>


        </div>
      </div>
    </div>
  </div>

</div>
