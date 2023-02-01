<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_Produtos (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
	$query->closeCursor();
}

if ($_GET['option'] == 'insert') {

	$i = 0;
	while (!empty($_FILES['NomeImagem']['name'][$i])) {
		$extensao1 = explode('.', $_FILES['NomeImagem']['name'][$i]);
		$novo_nome =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/produtos/Grande/' . $novo_nome;
		$destino2 = '../img/produtos/Pequena/' . $novo_nome;

		move_uploaded_file($_FILES['NomeImagem']['tmp_name'][$i], $destino1);
		copy($destino1, $destino2);


		//SALVA NO BANCO
		$query = $con->prepare('CALL Proc_I_Produtos (:Imagem, :NomeProduto, :Numeracao, :NomeMaterial, :NomePalmilha, :IDCategoria, :Capa)');
		$query->bindValue(':Imagem', $novo_nome);
		$query->bindValue(':NomeProduto', $_POST['NomeProduto']);
		$query->bindValue(':Numeracao', $_POST['Numeracao']);
		$query->bindValue(':NomeMaterial', $_POST['NomeMaterial']);
		$query->bindValue(':NomePalmilha', $_POST['NomePalmilha']);
		$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
		$query->bindValue(':Capa', $i == 0 ? 1 : 0);
		$query->execute();
		$query->closeCursor();

		$i++;
	}
}

if ($_GET['option'] == 'update') {

	$query = $con->prepare('CALL Proc_S_ImagemProduto (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome = $res->NomeImagem;
	$unlink1 = '../img/produtos/Grande/' . $res->NomeImagem;
	$unlink2 = '../img/produtos/Pequena/' . $res->NomeImagem;
	$query->closeCursor();


	if (isset($_FILES['NomeImagem']['name']) && !empty($_FILES['NomeImagem']['name'])) {
		unlink($unlink1);
		unlink($unlink2);
		$extensao1 = explode('.', $_FILES['NomeImagem']['name']);
		$novo_nome =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/produtos/Grande/' . $novo_nome;
		$destino2 = '../img/produtos/Pequena/' . $novo_nome;

		move_uploaded_file($_FILES['NomeImagem']['tmp_name'], $destino1);
		copy($destino1, $destino2);
	}

	$query = $con->prepare('CALL Proc_U_Produtos (:IDProduto, :Imagem, :NomeProduto, :Numeracao, :NomeMaterial, :NomePalmilha, :IDCategoria)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->bindValue(':Imagem', $novo_nome);
	$query->bindValue(':NomeProduto', $_POST['NomeProduto']);
	$query->bindValue(':Numeracao', $_POST['Numeracao']);
	$query->bindValue(':NomeMaterial', $_POST['NomeMaterial']);
	$query->bindValue(':NomePalmilha', $_POST['NomePalmilha']);
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_D_Produtos (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$query->closeCursor();
}
