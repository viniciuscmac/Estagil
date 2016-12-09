<?php
include ('estagil_model.php');

if(isset($_COOKIE['empresaLogada'])){
  $idEmpresa = $_COOKIE['empresaLogada'];
  print_r("id da empresa logada:: " . $idEmpresa);
  $empresa = infoEmpresa($idEmpresa);
  echo json_encode($empresa);
}

include ('portal_empresa_view.php');
?>
