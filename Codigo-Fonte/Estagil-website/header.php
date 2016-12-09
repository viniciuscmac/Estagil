<!DOCTYPE html>
<html lang="en">
<head>


  <title>Estagil </title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
  <script src="bower_components/angular/angular.js"></script>
  <script src="bower_components/angular-cookies/angular-cookies.js">  </script>
  <script src="assets/app/my-app.js"> </script>

  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <!-- Owl stylesheet -->


</head>

<body ng-app="EstagilApp" ng-controller="HeaderController">


  <!-- Header Starts -->
  <div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="index.php">Estágil</a>


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
            <li ng-class="{ active: isActive('/index.php'), hidden: empresaLogada}"><a href="index.php">Home</a></li>
            <li ng-class="{ active: isActive('/portal_empresa.php'), hidden: !empresaLogada}"><a href="portal_empresa.php">Início</a></li>
            <li ng-class="{ active: isActive('/estagios.php')}"><a href="estagios.php">Estágios</a></li>
            <li ng-class="{ active: isActive('/empresas.php')}"><a href="empresas.php">Empresas</a></li>
            <li ng-class="{ active: isActive('/register.php'), hidden: empresaLogada}"><a data-toggle="modal" data-target="#loginpop" style="cursor: pointer;">Entrar</a></li>
            <li ng-class="{ active: isActive('/empresa_login.php'), hidden: empresaLogada}"><a href="empresa_login.php">Empresas Login</a></li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ng-class="{hidden: !empresaLogada}">Minha Empresa <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li> -->
                <li ><a href="perfil_empresa.php">Ver perfil</a></li>
                <li ><a href="vagas_register.php">Cadastrar Uma Vaga</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="" ng-click= "logout()">Logout</a></li>
              </ul>
            </li>

          </ul>
        </div>
          <!-- Nav Ends -->

          <!--<?php include'modal_view.php';?> -->

        </div>
      </div>
    </div>
