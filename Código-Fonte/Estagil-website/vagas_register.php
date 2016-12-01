<?php
include ('estagil_model.php');
/*if(isset($_POST['Sign'])){
	$nomeEmpresa = $_POST['form_nome_empresa'];
	$email = $_POST['form_email_empresa'];
	$foneEmpresa = $_POST['form_telefone_empresa'];
	$areaEmpresa = $_POST['form_area_empresa'];
	$enderecoEmpresa = $_POST['form_endereco_empresa'];
    $descricaoEmpresa = $_POST['form_descricao_empresa'];
  $password = $_POST['form_senha_empresa'];
	novaEmpresa($nomeEmpresa,$foneEmpresa,$areaEmpresa,$enderecoEmpresa,$descricaoEmpresa, $email,$password);
  header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                         . "/index.php");
		exit();
  }*/
include ('vagas_register_view.php');
?>