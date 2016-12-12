<!DOCTYPE html>
<html lang="en">
<head>


  <title>Estagil </title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="/assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.js"></script>
  <script src="/assets/script.js"></script>
  <script src="/bower_components/angular/angular.js"></script>
  <script src="/bower_components/angular-cookies/angular-cookies.js">  </script>
  <script src="/app/my-app.js"> </script>

  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="/assets/owl-carousel/owl.theme.css">
  <script src="/assets/owl-carousel/owl.carousel.js"></script>
  <!-- Owl stylesheet -->


</head>

<body ng-app="EstagilApp" ng-controller="HeaderController">


  <!-- Header Starts -->
  <div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="/index.php">Estágil</a>


          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>


        <!-- Nav Starts -->
        <div class="navbar-collapse  collapse" ng-controller="navbarCtrl">
          <ul class="nav navbar-nav navbar-right" id="navbar-menu">
            <li ng-class="{ active: isActive('/index.php'), hidden: empresaLogada}"><a href="/index.php">Home</a></li>
            <li ng-class="{ active: isActive('/app/empresas/portal_empresa.php'), hidden: !empresaLogada}"><a href="/app/empresas/portal_empresa.php">Início</a></li>
            <li ng-class="{ active: isActive('/app/alunos/portal_aluno.php'), hidden: !alunoLogado}"><a href="/app/alunos/portal_aluno.php">Início</a></li>
            <li ng-class="{ active: isActive('/app/estagios/estagios.php')}"><a href="/app/estagios/estagios.php">Estágios</a></li>
            <li ng-class="{ active: isActive('/app/empresas/empresas.php')}"><a href="/app/empresas/empresas.php">Empresas</a></li>
            <!--<li ng-class="{ active: isActive('/register.php'), hidden: empresaLogada}"><a data-toggle="modal" data-target="#loginpop" style="cursor: pointer;">Entrar</a></li>-->
            <li ng-class="{ active: isActive('/app/login/login.php'), hidden: userLogado()}"><a href="/app/login/login.php">Login</a></li>
            <li><a href="" ng-click= "logout()" ng-class="{hidden: !userLogado()}">Logout</a></li>



          </ul>
        </div>
          <!-- Nav Ends -->
        </div>
      </div>
    </div>
