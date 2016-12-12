<?php
include ('estagil_model.php');

if(isset($_COOKIE['alunoLogado'])){
  $idAluno = $_COOKIE['alunoLogado'];
  $aluno = infoAluno($idAluno);
}

include ('portal_aluno_view.php');
?>
