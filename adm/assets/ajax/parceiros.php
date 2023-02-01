<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_Parceiros (:IDParceiros)');
	$query->bindValue(':IDParceiros', $_POST['IDParceiros']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {

	$extensao1 = explode('.', $_FILES['Imagem']['name']);
	$novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
	$destino1 = '../img/parceiros/' . $novo_nome;
	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);

	$query = $con->prepare('CALL Proc_I_Parceiros (:Imagem, :Nome, :Link)');
	$query->bindValue(':Imagem', $novo_nome);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Link', $_POST['Link']);
	$query->execute();
}

if ($_GET['option'] == 'update') {

	$query = $con->prepare('CALL Proc_S_ImagemParceiro (:IDParceiros)');
	$query->bindValue(':IDParceiros', $_POST['IDParceiros']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome = $res->Imagem;
	$unlink = '../img/parceiros/' . $res->Imagem;
	$query->closeCursor();


	if (isset($_FILES['Imagem']['name']) && !empty($_FILES['Imagem']['name'])) {
		unlink($unlink);	
		$extensao1 = explode('.', $_FILES['Imagem']['name']);
		$novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/parceiros/' . $novo_nome;
		move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);
	}

	$query = $con->prepare('CALL Proc_U_Parceiros (:IDParceiros, :Imagem, :Nome, :Link)');
	$query->bindValue(':IDParceiros', $_POST['IDParceiros']);
	$query->bindValue(':Imagem', $novo_nome);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Link', $_POST['Link']);
	$query->execute();
}

if ($_GET['option'] == 'delete') {

	$query = $con->prepare('CALL Proc_D_Parceiros (:IDParceiros)');
	$query->bindValue(':IDParceiros', $_POST['IDParceiros']);
	$query->execute();
	$query->closeCursor();
}
