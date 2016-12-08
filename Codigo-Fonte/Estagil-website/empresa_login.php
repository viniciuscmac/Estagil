<?php
include ('estagil_model.php');

    if(isset($_POST['SignEmpresa'])){
        $emailEmpresa = $_POST['form_email_empresa_login'];
        $passwordEmpresa = $_POST['form_password_empresa_login'];
        $idEmpresaLogada = checkEmpresa($emailEmpresa, $passwordEmpresa);
        print_r("id da empresa logada: " . $idEmpresaLogada);
        header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                            . "/index.php");
        exit();

    }

    include ('empresa_login_view.php');

?>


<script>
    var idEmpresaLogada = JSON.parse( '<?php echo json_encode( $idEmpresaLogada ); ?>' );
</script>