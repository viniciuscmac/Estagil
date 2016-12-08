<?php
include ('estagil_model.php');

$loginmessage = "";

if(isset($_POST['loginempresa'])){

        $emailEmpresa = $_POST['form_email_empresa_login'];
        $passwordEmpresa = $_POST['form_password_empresa_login'];
        $idEmpresaLogada = checkEmpresa($emailEmpresa, $passwordEmpresa);
        if ($idEmpresaLogada!=0) {
          header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                              . "/index.php?empresaid=".$idEmpresaLogada."");
          setcookie("empresaLogada", $idEmpresaLogada);
          exit();
        }
        else {
          $loginmessage = "Login ou Senha Incorretos!";

        }
    }

include ('empresa_login_view.php');
?>

<script>
    var idEmpresaLogada = JSON.parse( '<?php echo json_encode( $idEmpresaLogada ); ?>' );
</script>
