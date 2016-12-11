<?php
include ('estagil_model.php');

if(isset($_COOKIE['alunoLogado'])){
  $idAluno = $_COOKIE['alunoLogado'];
  $aluno = infoAluno($idAluno);
  print_r($aluno);
}

include ('portal_aluno_view.php');
?>
