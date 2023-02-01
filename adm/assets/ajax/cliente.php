<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_Clientes_S_U (:IDCliente)');
	$query->bindValue(':IDCliente', $_POST['IDCliente']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
	$query->closeCursor();
}

if ($_GET['option'] == 'insert') {
	$query = $con->prepare('CALL Proc_Clientes_I (:Nome)');
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->execute();
	$query->closeCursor();

	$query = $con->prepare('CALL Proc_Log_I (:IDUsuario, :IDProduto, :IDVariacao, :IDCLiente, :Mensagem, :Pagina)');
	$query->bindValue(':IDUsuario', $_SESSION['IDUsuario']);
	$query->bindValue(':IDProduto', NULL);
	$query->bindValue(':IDVariacao', NULL);
	$query->bindValue(':Mensagem', $_SESSION['Nome'] . ' Inseriu o cliente: ' . $_POST['Nome']);
	$query->bindValue(':Pagina', 'cliente_form');
	$query->execute();
	$query->closeCursor();
}

if ($_GET['option'] == 'update') {
	$query = $con->prepare('CALL Proc_Clientes_S_U (:IDCliente)');
	$query->bindValue(':IDCliente', $_POST['IDCliente']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$query->closeCursor();

	$query = $con->prepare('CALL Proc_Clientes_U (:IDCliente, :Nome)');
	$query->bindValue(':IDCliente', $_POST['IDCliente']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->execute();
	$query->closeCursor();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_Clientes_D (:IDCliente)');
	$query->bindValue(':IDCliente', $_POST['IDCliente']);
	$query->execute();
	$query->closeCursor();
}
