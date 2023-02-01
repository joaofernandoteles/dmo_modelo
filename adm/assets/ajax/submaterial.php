<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_SubMateriais_S_U (:IDSubMaterial)');
	$query->bindValue(':IDSubMaterial', $_POST['IDSubMaterial']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {
	$query = $con->prepare('CALL Proc_SubMateriais_I (:IDMaterial, :Nome)');
	$query->bindValue(':IDMaterial', $_POST['IDMaterial']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->execute();
}

if ($_GET['option'] == 'update') {
	$query = $con->prepare('CALL Proc_SubMateriais_U (:IDSubMaterial, :IDMaterial, :Nome)');
	$query->bindValue(':IDSubMaterial', $_POST['IDSubMaterial']);
	$query->bindValue(':IDMaterial', $_POST['IDMaterial']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->execute();
}

