<?php
include ('../../model/estagil_model.php');
if(isset($_POST['Sign'])){
	$nome = $_POST['form_nome'];
	$email = $_POST['form_email'];
	$fone = $_POST['form_telefone'];
	$curso = $_POST['form_curso'];
	$periodo = $_POST['form_periodo'];
  $datanasc = $_POST['birthday_year']."-".$_POST['birthday_month']."-".$_POST['birthday_day'];
  $endereco = $_POST['form_endereco'];
  $senha = $_POST['form_confirme'];
	novoAluno($nome,$fone,$curso,$periodo,$endereco,$datanasc,$email,$senha);
	setcookie('estagiarioCadastrado', $nome);

  header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                         . "../../index.php");
		exit();
  }
include ('register_view.php');
?>
