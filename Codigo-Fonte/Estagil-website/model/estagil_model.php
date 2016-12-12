<?php
require_once('mysql_connect.php');
//updateInfoEmpresa(6,"UFSC","48-35556777","Universidade","Trindade, Floripa, SC","Universidade","ufsc@ufsc.com","ufsc123");
//$teste = checkEmpresa("ufsc@ufsc.com","ufsc123");
//echo $teste;
//print_r (getEmpresaDetalhes(7));
//novoAluno("Joao","62-34567890","Ciencias da Computacao","4","Gyn","20","joao@gmail.com","1234567");
//updateInfoAluno(2,"Joao","62-34567890","Ciencias da Computacao","4","Gyn","joao@gmail.com","12345");
//print_r(listVagasEmpresa(6));
    // ... proceed to declare your function

		function listEmpresas(){
			global $conn;

			try {

				$stmt = $conn->query("SELECT Empresas.*, acessoEmpresa.emailEmpresa FROM Empresas
					INNER JOIN acessoEmpresa
					ON Empresas.idEmpresas=acessoEmpresa.Empresas_idEmpresas");
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
			$stmt->execute(array($nomeAluno,$foneAluno,$cursoAluno,$semestreAluno,$enderecoAluno,$idadeAluno));
			$conn->commit();

			$conn->beginTransaction();
			$idtemp = getIdAluno($nomeAluno);
			$stmt = $conn->prepare("INSERT INTO `Estagil`.`acessoAlunos` (`Alunos_idAlunos`, `emailAluno`, `password`) VALUES (?, ?, ?)");
			$stmt->execute(array($idtemp,$email,$password));
			$conn->commit();

		}
		catch (PDOException $ex) {
			echo $ex;
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

	function novaEmpresa($nomeEmpresa,$foneEmpresa,$areaEmpresa,$enderecoEmpresa,$descricaoEmpresa,$email,$password){
		global $conn;
		try {
			$conn->beginTransaction();

			$stmt = $conn->prepare("INSERT INTO `Estagil`.`Empresas` (`idEmpresas`, `nomeEmpresa`, `foneEmpresa`, `areaEmpresa`, `enderecoEmpresa`, `descricaoEmpresa`) VALUES (NULL, ?, ?, ?, ?, ?)");
			$stmt->execute(array($nomeEmpresa,$foneEmpresa,$areaEmpresa,$enderecoEmpresa,$descricaoEmpresa));
			$conn->commit();

			$conn->beginTransaction();
			$idtemp = getIdEmpresa($nomeEmpresa);
			$stmt = $conn->prepare("INSERT INTO `Estagil`.`acessoEmpresa` (`Empresas_idEmpresas`, `emailEmpresa`, `password`) VALUES (?, ?, ?)");
			$stmt->execute(array($idtemp,$email,$password));
			$conn->commit();
		}
		catch (PDOException $ex) {
			echo $ex;
		}

	}

	function getIdEmpresa($nomeEmpresa){
		global $conn;

		try {
			$stmt = $conn->query("SELECT `idEmpresas` FROM `Empresas` WHERE `nomeEmpresa`='".$nomeEmpresa."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}
		foreach($result as $row){
			$id = $row['idEmpresas'];
		}

		return $id;
	}

	function novaVaga($idEmpresa,$areaVaga,$dataInicio,$descricaoVaga,$salarioVaga,$auxTransporte,$auxExtra,$requisitosVaga,$tituloVaga){
		global $conn;
		try {
			$conn->beginTransaction();

			$stmt = $conn->prepare("INSERT INTO `Estagil`.`Vagas` (`Empresas_idEmpresas`, `idVaga`, `areaVaga`, `dataInicio`, `descricaoVaga`, `salarioVaga`, `auxilioTransporte`, `auxilioExtra`, `requisitosVaga`, `tituloVaga`) VALUES (?, NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->execute(array($idEmpresa,$areaVaga,$dataInicio,$descricaoVaga,$salarioVaga,$auxTransporte,$auxExtra,$requisitosVaga,$tituloVaga));
			$conn->commit();
		}
		catch (PDOException $ex) {
			echo $ex;
		}

	}

	function getEmpresaDetalhes($idEmpresa){
		global $conn;

		try {
			$stmt = $conn->query("SELECT Empresas.*, acessoEmpresa.emailEmpresa FROM Empresas
				INNER JOIN acessoEmpresa
				ON Empresas.idEmpresas='".$idEmpresa."'AND acessoEmpresa.Empresas_idEmpresas='".$idEmpresa."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;
	}

	function checkAluno($username,$password){
		global $conn;
		try {

			$stmt = $conn->query("SELECT `Alunos_idAlunos`, `password` FROM `acessoAlunos` WHERE `emailAluno`='".$username."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		foreach ($result as $row){
			if($row['password']==$password){
				return $row['Alunos_idAlunos'];
			}
			else{
				return 0;
			}
		}
	}

	function checkEmpresa($username,$password){
		global $conn;
		try {

			$stmt = $conn->query("SELECT `Empresas_idEmpresas`, `password` FROM `acessoEmpresa` WHERE `emailEmpresa`='".$username."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $ex) {
			echo $ex;
		}

		foreach ($result as $row){
			if($row['password']==$password){
				return $row['Empresas_idEmpresas'];
			}
			else{
				return 0;
			}
		}
	}

	function listVagas(){
		global $conn;

		try {

			$stmt = $conn->query("SELECT `nomeEmpresa`, `salarioVaga`, `tituloVaga`,`idVaga`,`descricaoVaga` FROM `Vagas`, `Empresas` WHERE `idEmpresas` = `Empresas_idEmpresas`");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo $ex;
		}

		return $result;
	}

	function listDetalhesVaga($idVaga){
		global $conn;

		try {

			$stmt = $conn->query("SELECT * FROM `Vagas` WHERE `idVaga`='".$idVaga."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;

	}

	function listVagasEmpresa($idEmpresa){
		global $conn;

		try {

			$stmt = $conn->query("SELECT * FROM `Vagas` WHERE `Empresas_idEmpresas`='".$idEmpresa."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;

	}

	function inscricaoVaga($idAluno,$idVaga,$dataVaga){
		global $conn;

		try {

			$stmt = $conn->query("INSERT INTO `Estagil`.`Inscricoes`(`Alunos_idAlunos`, `Vagas_idVaga`, `dataVaga`) VALUES ($idAluno,$idVaga,$dataVaga)");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;

	}

	function listInscritos($idVaga){
		global $conn;
		$id = [];
		$final = array();

		try {

			$stmt = $conn->query("SELECT `Alunos_idAlunos` FROM `Inscricoes` WHERE Vagas_idVaga='".$idVaga."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		foreach($result as $row){
			$id[] = $row['Alunos_idAlunos'];
		}

		foreach ($id as $value) {

			try {

				$stmt = $conn->query("SELECT Alunos.*, acessoAlunos.emailAluno FROM Alunos
					INNER JOIN acessoAlunos
					ON Alunos.idAlunos='".$value."' AND acessoAlunos.Alunos_idAlunos='".$value."'");
				$result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$final = array_merge($final, $result2);
			}
			catch (PDOException $ex) {
				echo "FAILURE DATABASE";
			}


		}

		return $final;

	}

	function listVagasInscritas($idAlunos){
		global $conn;

		try {

			$stmt = $conn->query("SELECT `Vagas_idVaga`, `dataVaga` FROM `Inscricoes` WHERE Alunos_idAlunos='".$idAlunos."'");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;

	}

	function deleteAluno($id){
		global $conn;

		try {

			$stmt = $conn->query("DELETE FROM `Estagil`.`Alunos` WHERE `idAlunos` = ".$id."");
			//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		//return $result;
	}

	function deleteEmpresa($id){
		global $conn;

		try {

			$stmt = $conn->query("DELETE FROM `Estagil`.`Empresas` WHERE `idEmpresas` = ".$id."");
			//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		//return $result;
	}

	function listVagasSalario(){
		global $conn;

		try {

			$stmt = $conn->query("SELECT * FROM `Vagas` ORDER BY `salarioVaga`");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;

	}

	function infoAluno($idAluno){
		global $conn;

		try {

			$stmt = $conn->query("SELECT * FROM `Alunos`, `acessoAlunos` WHERE Alunos.idAlunos = ".$idAluno." AND acessoAlunos.Alunos_idAlunos = ".$idAluno."");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;
	}

	function infoEmpresa($idEmpresa){
		global $conn;

		try {

			$stmt = $conn->query("SELECT * FROM `Empresas`, `acessoEmpresa` WHERE Empresas.idEmpresas = ".$idEmpresa." AND acessoEmpresa.Empresas_idEmpresas = ".$idEmpresa."");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}

		return $result;
	}

	function updateInfoAluno($idAluno,$nomeAluno,$foneAluno,$cursoAluno,$semestreAluno,$enderecoAluno,$email,$password){
		global $conn;
		try {
			$conn->beginTransaction();

			$stmt = $conn->prepare("UPDATE `Estagil`.`Alunos`  SET `nomeAluno` = ?, `foneAluno` = ?, `cursoAluno` = ?,  `semestreAluno` = ?, `enderecoAluno` = ? WHERE `Alunos`.`idAlunos` = ?");
			$stmt->execute(array($nomeAluno,$foneAluno,$cursoAluno,$semestreAluno,$enderecoAluno,$idAluno));

			$stmt = $conn->prepare("UPDATE `Estagil`.`acessoAlunos` SET `emailAluno` = ?, `password` = ? WHERE `acessoAlunos`.`Alunos_idAlunos` = ?");
			$stmt->execute(array($email,$password,$idAluno));
			$conn->commit();
		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}
	}

	function updateInfoEmpresa($idEmpresa,$nomeEmpresa,$foneEmpresa,$areaEmpresa,$enderecoEmpresa,$descricaoEmpresa,$email,$password){
		global $conn;
		try {
			$conn->beginTransaction();


			$stmt = $conn->prepare("UPDATE `Estagil`.`Empresas`  SET `nomeEmpresa` = ?, `foneEmpresa` = ?, `areaEmpresa` = ?, `enderecoEmpresa` = ?, `descricaoEmpresa` = ? WHERE `Empresas`.`idEmpresas` = ?");
			$stmt->execute(array($nomeEmpresa,$foneEmpresa,$areaEmpresa,$enderecoEmpresa,$descricaoEmpresa,$idEmpresa));

			$stmt = $conn->prepare("UPDATE `Estagil`.`acessoEmpresa` SET `emailEmpresa` = ?, `password` = ? WHERE `acessoEmpresa`.`Empresas_idEmpresas` = ?");
			$stmt->execute(array($email,$password,$idEmpresa));
			$conn->commit();
		}
		catch (PDOException $ex) {
			echo "FAILURE DATABASE";
		}
	}
	?>
