<!DOCTYPE html>
<html>
<body>
<?php include'header.php';?>

<div class="bg"></div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-8">

                  <h1>Bem vindo à Estágil</h1>
                  <p>Encontre sua vaga de estágio em um click. Rápido e fácil.</p>
            </div>
        </div>
    </div>

<div class="banner-search">
  <div class="container">

    <!-- banner -->
    <h3>Procure um estágio</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Programador, Suporte, Analista...">
          <div class="row">

            <div class="col-lg-3 col-sm-4">
              <select class="form-control" placeholder="Cidade">
                <option selected disabled>Cidade</option>
                <option>Goiânia</option>
                <option>Anápolis</option>
                <option>Senador Canedo</option>
                <option>Todas</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option selected disabled>Quando</option>
                <option>1º semestre</option>
                <option>2º semestre</option>
                <option>Qualquer semestre</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Procurar</button>
            </div>
          </div>


        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Cadastre-se agora e fique sabendo sobre todas as vagas oferecidas.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Crie já</button>        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner -->

  <div class="container">
    <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">Ver todos</a>
      <h2>Estágios mais procurados</h2>
      <div id="owl-example" class="owl-carousel">
        <div class="properties">
          <div class="image-holder"><img src="images/empresas/googlelogo.png" class="img-responsive" alt="properties"/>

          </div>
          <h4><a href="detalhe_vaga.php">Desenvolvedor java</a></h4>
          <p class="empresa">Empresa 1</p>
          <p class="price">Vagas: 5</p>

          <a class="btn btn-primary" href="detalhe_vaga.php">Ver detalhes</a>
        </div>

        <div class="properties">
          <div class="image-holder"><img src="images/empresas/microsoftlogo.jpg" class="img-responsive" alt="properties"/>

          </div>
          <h4><a href="detalhe_vaga.php">Desenvolvedor php</a></h4>
          <p class="empresa">Empresa 1</p>
          <p class="price">Vagas: 5</p>

          <a class="btn btn-primary" href="detalhe_vaga.php">Ver detalhes</a>
        </div>

        <div class="properties">
          <div class="image-holder"><img src="images/empresas/ufglogo.jpg" class="img-responsive" alt="properties"/>

          </div>
          <h4><a href="detalhe_vaga.php">Desenvolvedor javascript</a></h4>
          <p class="empresa">Empresa 2</p>
          <p class="price">Vagas: 10</p>

          <a class="btn btn-primary" href="detalhe_vaga.php">Ver detalhes</a>
        </div>

        <div class="properties">
          <div class="image-holder"><img src="images/empresas/inflogo.jpg" class="img-responsive" alt="properties"/>

          </div>
          <h4><a href="detalhe_vaga.php">Suporte</a></h4>
          <p class="empresa">Empresa 3</p>
          <p class="price">Vagas: 3</p>

          <a class="btn btn-primary" href="detalhe_vaga.php">Ver detalhes</a>
        </div>

        <div class="properties">
          <div class="image-holder"><img src="images/empresas/ibmlogo.jpg" class="img-responsive" alt="properties"/>

          </div>
          <h4><a href="detalhe_vaga.php">Analista</a></h4>
          <p class="empresa">Empresa 1</p>
          <p class="price">Vagas: 2</p>

          <a class="btn btn-primary" href="detalhe_vaga.php">Ver detalhes</a>
        </div>

        <div class="properties">
          <div class="image-holder"><img src="images/empresas/briefcase.png" class="img-responsive" alt="properties"/>

          </div>
          <h4><a href="detalhe_vaga.php">Desenvolvedor php</a></h4>
          <p class="empresa">Empresa x</p>
          <p class="price">Vagas: 10</p>

          <a class="btn btn-primary" href="detalhe_vaga.php">Ver detalhes</a>
        </div>

      </div>
    </div>
    <div class="spacer">
      <div class="row">
        <div class="col-lg-6 col-sm-9 recent-view">
          <h3>Sobre a Estágil</h3>
          <p id="demo"></p>
          <script type="text/javascript">
          // using JSON.parse on the output of json_encode
          var array = JSON.parse( '<?php echo json_encode($alunos); ?>' );
          //document.getElementById('demo').innerHTML = array[0].enderecoAluno;
          </script>


          <p> A Estágil é um empresa que visa solucionar o problema de estudantes do ensino superior, ajudando-os a encontrar uma oportunidade de estágio e crescer professionalmente na sua carreira. Ela facilita a busca de estágios nas áreas de trabalho e nas regiões que o usuário tiver mais interesse.<br></p>
        </div>
      </div>
    </div>

  </div>
</body>
<?php include'footer.php';?>
</html>
