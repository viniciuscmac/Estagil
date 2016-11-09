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



  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <!-- Owl stylesheet -->


  <!-- slitslider -->
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
  <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
  <!-- slitslider -->

</head>

<body>


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
        <div class="navbar-collapse  collapse">
          <ul class="nav navbar-nav navbar-right" id="navbar-menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">Estágios</a></li>
            <li><a href="empresas.php">Empresas</a></li>
            <li><a data-toggle="modal" data-target="#loginpop" style="cursor: pointer;">Entrar</a></li>
          </ul>
        </div>
        <!-- #Nav Ends -->
      </div>
    </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function(){
    $(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
})});
  </script>
