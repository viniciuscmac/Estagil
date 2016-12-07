<?php
include ('estagil_model.php');


$estagios = listVagas();
if(isset($_GET['id'])){
  $detalhe = $_GET['id'];
  print_r($detalhe);
}



if(isset($_POST['id-detalhe-btn'])){
   $idEstagio = $_POST['id-detalhe'];
   print_r($idEstagio);
   $detalhe = listDetalhesVaga($idEstagio);
}

include ('estagios_view.php');
?>
