<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_SubClientes_S_U (:IDSubCliente)');
	$query->bindValue(':IDSubCliente', $_POST['IDSubCliente']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'selectCampo') {
	$query = $con->prepare('CALL Proc_SubClientes_S_Campo (:IDCliente)');
	$query->bindValue(':IDCliente', $_POST['IDCliente']);
	$query->execute();
	echo '<option value="" class="d-none">Selecione Aqui ...</option>';
	while ($res = $query->fetch(PDO::FETCH_OBJ)) {
		echo '<option value="' . $res->IDSubCliente . '">' . $res->Nome . '</option>';
	}
}

if ($_GET['option'] == 'insert') {
	$query = $con->prepare('CALL Proc_SubClientes_I (:Nome, :PrefixRef)');
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':PrefixRef', strtoupper($_POST['PrefixRef']));
	$query->execute();
}

if ($_GET['option'] == 'update') {
	$query = $con->prepare('CALL Proc_SubClientes_U (:IDSubCliente, :Nome, :PrefixRef)');
	$query->bindValue(':IDSubCliente', $_POST['IDSubCliente']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':PrefixRef', strtoupper($_POST['PrefixRef']));
	$query->execute();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_SubClientes_D (:IDSubCliente)');
	$query->bindValue(':IDSubCliente', $_POST['IDSubCliente']);
	$query->execute();
}
