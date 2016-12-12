<?php
include ('../../model/estagil_model.php');

$loginmessage = "";

if(isset($_POST['login'])){

        $email = $_POST['form_email'];
        $password = $_POST['form_password'];
        $idEmpresaLogada = checkEmpresa($email, $password);
        $idAlunoLogado = checkAluno($email,$password);
        if ($idEmpresaLogada!=0) {
          setcookie("empresaLogada", $idEmpresaLogada,0,  '/');

          header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                              . "../../empresas/portal_empresa.php");
          exit();
        }
        else if ($idAlunoLogado!=0) {
          header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                              . "../../alunos/portal_aluno.php");
          setcookie("alunoLogado", $idAlunoLogado,0,  '/');
          exit();
        }
        else {
          $loginmessage = "<div class='alert alert-danger'>
            <strong>Atenção! </strong> Email ou senha incorretos!
          </div>";
        }
    }

include ('login_view.php');
?>

<script>
    var idEmpresaLogada = JSON.parse( '<?php echo json_encode( $idEmpresaLogada ); ?>' );
</script>
