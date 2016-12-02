<?php
include ('estagil_model.php');
if(isset($_POST['Sign'])){
	#$nomeEmpresa = $_POST['form_nome_empresa'];
	$dataInicio = $_POST['form_inicio_vaga'];
	$areaVaga = $_POST['form_area_vaga'];
	$descricaoVaga = $_POST['form_descricao_vaga'];
	$salarioVaga = $_POST['form_salario_vaga'];
  $transporteVaga = $_POST['form_transporte_vaga'];
	$extraVaga = $_POST['form_extra_vaga'];
  $requisitosVaga = $_POST['form_requisitos_vaga'];
	$tituloVaga = $_POST['form_titulo_vaga'];

	novaVaga(/*$nomeEmpresa,*/$areaVaga,$dataInicio,$descricaoVaga,$salarioVaga, $transporteVaga,$extraVaga,$requisitosVaga, $tituloVaga);
  header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])
                         . "/index.php");
		exit();
}
include ('vagas_register_view.php');
?>