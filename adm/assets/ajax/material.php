<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_Materiais_S_U (:IDMaterial)');
	$query->bindValue(':IDMaterial', $_POST['IDMaterial']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {
	$query = $con->prepare('CALL Proc_Materiais_I (:Nome, :Ordem)');
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Ordem', $_POST['Ordem']);
	$query->execute();
}

if ($_GET['option'] == 'update') {
	$query = $con->prepare('CALL Proc_Materiais_U (:IDMaterial, :Nome, :Ordem)');
	$query->bindValue(':IDMaterial', $_POST['IDMaterial']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Ordem', $_POST['Ordem']);
	$query->execute();
}

