<?php
    include ('../../model/estagil_model.php');

   if(isset($_COOKIE['idVaga'])){
     $detalheId = $_COOKIE['idVaga'];
     $detalhesEstagio = listDetalhesVaga($detalheId);
     echo json_encode($detalhesEstagio[0]);
   }
?>