<?php
include ('estagil_model.php');

if(isset($_COOKIE['alunoLogado'])){
  $idAluno = $_COOKIE['alunoLogado'];
  $aluno = infoAluno($idAluno)[0];
  
}

if(isset($_POST['Save'])){

	$nomeAluno = $_POST['form_nome'];
	$email = $_POST['form_email'];
	$foneAluno = $_POST['form_telefone'];
	$cursoAluno = $_POST['form_curso'];
	$semestreAluno = $_POST['form_periodo'];
  $enderecoAluno = $_POST['form_endereco'];
  $password = $_POST['form_confirme'];

	updateInfoAluno($idAluno,$nomeAluno,$foneAluno,$cursoAluno,$semestreAluno,$enderecoAluno,$email,$password);

  header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
  . "perfil_aluno.php");
		exit();
  }



include ('perfil_aluno_view.php');
?>
