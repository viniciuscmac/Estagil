<?php
include ('estagil_model.php');


$detalhes = listDetalhesVaga(0);

print_r ($detalhes);

include ('detalhe_vaga_view.php');
?>
