<?php
include ('../../model/estagil_model.php');

  $estagios = listVagas();
  
  if(isset($_GET['id'])){
    $detalhe = $_GET['id'];
    print_r($detalhe);
  }

  if(isset($_COOKIE['idVagaInscricao'])){
    $idAluno = $_COOKIE['alunoLogado'];
    $idVaga = $_COOKIE['idVagaInscricao'];
    inscricaoVaga($idAluno,$idVaga);
  }

  include ('estagios_view.php');
?>
