<?php
require_once('mysql_connect.php');
print_r (listAlunos());
/*foreach ($alunos as $row) {
  echo 'ID: '.$row['idAlunos'].'<br><br>';
  echo 'Nome: '.$row['nomeAluno'].'<br><br>';
  echo 'Telefone: '.$row['foneAluno'].'<br><br>';
  echo 'Curso: '.$row['cursoAluno'].'<br><br>';
  echo 'Semestre: '.$row['semestreAluno'].'<br><br>';
  echo 'Endereço: '.$row['enderecoAluno'].'<br><br>';
  echo 'Idade: '.$row['idadeAluno'].'<br><br>';
}*/
function listAlunos(){
	global $conn;

   try {

   		$stmt = $conn->query("SELECT * FROM Alunos");
   		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   	}
   	catch (PDOException $ex) {
   		echo "FAILURE DATABASE";
   	}
	return $result;
}

?>
