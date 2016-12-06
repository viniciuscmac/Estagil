<?php
include ('estagil_model.php');


$estagios = listVagas();

//print_r("TESTE");
if(isset($_POST['id-detalhe-btn'])){
   $idEstagio = $_POST['id-detalhe'];
   print_r($idEstagio);
   $detalhe = listDetalhesVaga($idEstagio);
}

include ('estagios_view.php');
?>
