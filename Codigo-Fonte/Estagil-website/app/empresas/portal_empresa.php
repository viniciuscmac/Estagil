<?php
include ('estagil_model.php');

if(isset($_COOKIE['empresaLogada'])){
  $idEmpresa = $_COOKIE['empresaLogada'];
  $empresa = infoEmpresa($idEmpresa);
}

include ('portal_empresa_view.php');
?>
