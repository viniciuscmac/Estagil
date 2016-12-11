<?php
include ('estagil_model.php');

if(isset($_COOKIE['alunoLogado'])){
  $idAluno = $_COOKIE['alunoLogado'];
  $aluno = infoAluno($idAluno)[0];
}





include ('perfil_aluno_view.php');
?>
