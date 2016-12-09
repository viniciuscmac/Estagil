<?php
include ('estagil_model.php');

if(isset($_COOKIE['empresaLogada'])){
  $idEmpresa = $_COOKIE['empresaLogada'];
  $empresa = infoEmpresa($idEmpresa)[0];
}

if(isset($_POST['Save'])){


  $nomeEmpresa = $_POST['form_nome_empresa'];
  $email = $_POST['form_email_empresa'];
  $foneEmpresa = $_POST['form_telefone_empresa'];
  $areaEmpresa = $_POST['form_area_empresa'];
  $enderecoEmpresa = $_POST['form_endereco_empresa'];
  $descricaoEmpresa = $_POST['form_descricao_empresa'];
  $password = $_POST['form_senha_empresa'];
  updateInfoEmpresa($idEmpresa,$nomeEmpresa,$foneEmpresa,$areaEmpresa,$enderecoEmpresa,$email,$password);
  header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
  . "/portal_empresa.php");
  exit();
}



include ('perfil_empresa_view.php');
?>
