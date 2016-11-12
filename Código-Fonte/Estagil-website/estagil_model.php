<?php
require_once('mysql_connect.php');

//print_r (listEmpresas());
novoAluno("Joao","62-34567890","Ciencias da Computacao","4","Gyn","20","joao@gmail.com","1234567");
/*foreach ($alunos as $row) {
  echo 'ID: '.$row['idAlunos'].'<br><br>';
  echo 'Nome: '.$row['nomeAluno'].'<br><br>';
  echo 'Telefone: '.$row['foneAluno'].'<br><br>';
  echo 'Curso: '.$row['cursoAluno'].'<br><br>';
  echo 'Semestre: '.$row['semestreAluno'].'<br><br>';
  echo 'Endereço: '.$row['enderecoAluno'].'<br><br>';
  echo 'Idade: '.$row['idadeAluno'].'<br><br>';
}*/

function listEmpresas(){
	global $conn;

   try {

   		$stmt = $conn->query("SELECT * FROM Empresas");
   		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   	}
   	catch (PDOException $ex) {
   		echo "FAILURE DATABASE";
   	}

	return $result;


}

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

function novoAluno($nomeAluno,$foneAluno,$cursoAluno,$semestreAluno,$enderecoAluno,$idadeAluno,$email,$password){
	global $conn;
   try {
		$conn->beginTransaction();

   		$stmt = $conn->prepare("INSERT INTO `Estagil`.`Alunos` (`idAlunos`, `nomeAluno`, `foneAluno`, `cursoAluno`, `semestreAluno`, `enderecoAluno`, `idadeAluno`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
			INSERT INTO `Alunos`(`idAlunos`, `nomeAluno`, `foneAluno`, `cursoAluno`, `semestreAluno`, `enderecoAluno`, `idadeAluno`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
			$stmt->execute(array($nomeAluno,$foneAluno,$cursoAluno,$semestreAluno,$enderecoAluno,$idadeAluno));
		$conn->commit();

		$conn->beginTransaction();
		$idtemp = getIdAluno($nomeAluno);
		$stmt = $conn->prepare("INSERT INTO `Estagil`.`acessoAlunos` (`Alunos_idAlunos`, `emailAluno`, `password`) VALUES (?, ?, ?)");
   		$stmt->execute(array($idtemp,$email,$password));
		$conn->commit();

   	}
   	catch (PDOException $ex) {
   		echo "FAILURE DATABASE";
   	}

}

function getIdAluno($nomeAluno){
	 global $conn;

   try {
   		$stmt = $conn->query("SELECT `idAlunos` FROM `Alunos` WHERE `nomeAluno`='".$nomeAluno."'");
   		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   	}
   	catch (PDOException $ex) {
   		echo "FAILURE DATABASE";
   	}
	foreach($result as $row){
	$id = $row['idAlunos'];
	}

	return $id;
}


?>
