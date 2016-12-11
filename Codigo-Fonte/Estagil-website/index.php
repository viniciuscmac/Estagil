<?php
include ('/model/estagil_model.php');


$alunos = listAlunos();
$loginmessage = "";

if(isset($_POST['loginuser'])){

        $emailAluno = $_POST['emailUser'];
        $passwordAluno = $_POST['passwordUser'];
        $idAlunoLogado = checkAluno($emailAluno, $passwordAluno);
        if ($idAlunoLogado!=0) {
          header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                              . "/index.php?alunoid=".$idAlunoLogado."");
          exit();
        }
        else {
          $loginmessage = "Login ou Senha Incorretos!";

        }
    }

include ('index_view.php');

?>
