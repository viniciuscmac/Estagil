<?php
include ('estagil_model.php');


$estagios = listVagas();
if(isset($_GET['id'])){
  $detalhe = $_GET['id'];
  print_r($detalhe);
}

  include ('estagios_view.php');

?>
