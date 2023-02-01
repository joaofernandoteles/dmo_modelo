<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_Categoria (:IDCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {

	$query = $con->prepare('CALL Proc_I_Categorias (:NomeCategoria)');
	$query->bindValue(':NomeCategoria', $_POST['NomeCategoria']);
	$query->execute();
}

if ($_GET['option'] == 'update') {


	$query = $con->prepare('CALL Proc_U_Categoria (:IDCategoria, :NomeCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->bindValue(':NomeCategoria', $_POST['NomeCategoria']);
	$query->execute();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_D_Categoria (:IDCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$query->closeCursor();
}
