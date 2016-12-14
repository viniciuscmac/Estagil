<?php
include ('../../model/estagil_model.php');

if(isset($_COOKIE['empresaLogada'])){
  $idEmpresa = $_COOKIE['empresaLogada'];
  $empresa = infoEmpresa($idEmpresa);

  $vagas = listVagasEmpresa($idEmpresa);
}


if(isset($_COOKIE['idVagaDeletar'])){
  $idVagaDeletar = $_COOKIE['idVagaDeletar'];

  deleteVaga($idVagaDeletar);
  echo "Vaga Deletada";
}


include ('portal_empresa_view.php');
?>
