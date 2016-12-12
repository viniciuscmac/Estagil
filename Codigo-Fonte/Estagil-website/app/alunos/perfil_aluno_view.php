<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
include$path.'/' . 'header.php';?>

<script src="perfil_aluno.controller.js"></script>


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
            </div>

            <textarea rows="2" class="form-control" placeholder="Endereço" name="form_endereco" ng-model="perfilCtrl.aluno.enderecoAluno" ng-disabled="!perfilCtrl.editar" required></textarea>
            <input type="password" class="form-control" placeholder="Senha" name="form_senha" ng-model="perfilCtrl.aluno.password" ng-disabled="!perfilCtrl.editar" required>
            <input type="password" class="form-control" placeholder="Confirme sua senha" name="form_confirme" ng-disabled="!perfilCtrl.editar" required>

            <button type="button" class="btn btn-default" name="Edit" ng-show="!perfilCtrl.editar" ng-click="perfilCtrl.setEditar()">Editar</button>
            <button ng-show="perfilCtrl.editar" type="button" class="btn btn-default" name="Cancel"  ng-click="perfilCtrl.setEditar()">Cancelar</button>
            <div class="">
              <br><button type="submit" class="btn btn-success" name="Save" ng-show="perfilCtrl.editar">Salvar</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>

</div>
<?php 
 $path = $_SERVER['DOCUMENT_ROOT'];
include$path.'/' . 'header.php';?>

<script src="perfil_empresa.controller.js"></script>


<script type="text/javascript">
var empresa = JSON.parse( '<?php echo json_encode($empresa); ?>' );
</script>

<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Perfil</h2>
  </div>
</div>
<!-- banner -->

<div ng-controller="PerfilEmpresaController as perfilCtrl">

  <div class="container">
    <div class="spacer">
      <div class="row register">
        <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

          <form class="" action="" method="post">
            <input type="text" class="form-control" placeholder="Nome da Empresa" name="form_nome_empresa" ng-model="perfilCtrl.empresa.nomeEmpresa" ng-disabled="!perfilCtrl.editar" required>
            <input type="email" class="form-control" placeholder="Email" name="form_email_empresa" ng-model="perfilCtrl.empresa.emailEmpresa"  ng-disabled="!perfilCtrl.editar" required>
            <input type="text" class="form-control" placeholder="Telefone" name="form_telefone_empresa" ng-model="perfilCtrl.empresa.foneEmpresa" ng-disabled="!perfilCtrl.editar" required>
            <input type="text" class="form-control" placeholder="Área da Empresa" name="form_area_empresa"  ng-model="perfilCtrl.empresa.areaEmpresa" ng-disabled="!perfilCtrl.editar" required>
            <input type="textarea" class="form-control" rows="15" placeholder="Forneça uma descrição de sua empresa" name="form_descricao_empresa" ng-model="perfilCtrl.empresa.descricaoEmpresa" ng-disabled="!perfilCtrl.editar" ></textarea>

            <input type="textarea" rows="2" class="form-control" placeholder="Endereço" name="form_endereco_empresa" ng-model="perfilCtrl.empresa.enderecoEmpresa" ng-disabled="!perfilCtrl.editar" required></textarea>
            <input type="password" class="form-control" placeholder="Senha" name="form_senha_empresa" ng-model="perfilCtrl.empresa.password" ng-disabled="!perfilCtrl.editar" required>
            <input type="password" class="form-control" placeholder="Confirme sua senha" name="form_confirme_empresa" ng-disabled="!perfilCtrl.editar" required>

            <button type="button" class="btn btn-default" name="Edit" ng-show="!perfilCtrl.editar" ng-click="perfilCtrl.setEditar()">Editar</button>
            <button ng-show="perfilCtrl.editar" type="button" class="btn btn-default" name="Cancel"  ng-click="perfilCtrl.setEditar()">Cancelar</button>
            <br><button type="submit" class="btn btn-success" name="Save" ng-show="perfilCtrl.editar">Salvar</button>

          </form>


        </div>
      </div>
    </div>
  </div>
</div>

<?php include$path.'/' . 'footer.php';?>