<?php include'header.php';?>


<script src="assets/app/portal_empresa_app.js"></script>

<script type="text/javascript">
empresa = JSON.parse( '<?php echo json_encode($empresa); ?>' );
</script>

<div ng-controller="PortalEmpresaController">




  <div class="container">
    <div class="properties-listing spacer">

      <div class="row">
        <div class="col-lg-3 col-sm-4 hidden-xs">

          <div class="hot-properties hidden-xs">
            <h4>Minha Empresa</h4>
            <div class="row">
              <div class="col-lg-12 col-sm-5">
                <ul class="list-unstyled">
                  <li><a href="#">Editar perfil</a></li>
                  <li><a href="#">Cadastrar Nova Vaga</a></li>

                </ul></div>

              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-8 col-sm-8 ">

              <h2>Vagas Cadastradas</h2>
              <div class="row">
                <div class="col-lg-8"> AQUI MOSTRA A LISTA DE VAGAS CADASTRADAS PELA EMPRESA</div>
                <div class="col-lg-4">
                  <div class="col-lg-12  col-sm-6">
                    BARRA LATERAL DIREITA SE QUISER
                  </div>
                </div>
              </div>
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
</div>




<?php include'footer.php';?>
