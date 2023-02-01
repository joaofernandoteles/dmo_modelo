<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_Variacao_S_U (:IDVariacao)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {
	$query = $con->prepare('CALL Proc_Variacao_I (:IDProduto, :IDTipo, :IDSituacao, :StyleName, :StockNumber, :Estacao, :Nome, :Obs)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->bindValue(':IDTipo', $_POST['IDTipo']);
	$query->bindValue(':IDSituacao', $_POST['IDSituacao']);
	$query->bindValue(':StyleName', $_POST['StyleName']);
	$query->bindValue(':StockNumber', $_POST['StockNumber']);
	$query->bindValue(':Estacao', $_POST['Estacao']);
	$query->bindValue(':Nome', strtoupper($_POST['Nome']));
	$query->bindValue(':Obs', $_POST['Obs']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$Referencia = $res->Referencia;
	$IDVariacao = $res->IDVariacao;
	$query->closeCursor();

	$pastaArquivo = '../variacoes/' . $Referencia . '/' . strtoupper($_POST['Nome']) . '/arquivos/';
	$pastaImg = '../variacoes/' . $Referencia . '/' . strtoupper($_POST['Nome']) . '/img/';
	if (!is_dir($pastaArquivo))
		mkdir($pastaArquivo, 0777, true);
	if (!is_dir($pastaImg))
		mkdir($pastaImg, 0777, true);
	if (isset($_FILES['Arquivo'])) {
		$i = 0;
		while ($_FILES['Arquivo']['name'][$i]) {
			$extensao = explode(".", $_FILES['Arquivo']['name'][$i]);
			$expl = $extensao[count($extensao) - 1];
			$novo_nome = md5(date('Y-m-d H:i:s')) . $i . "." . $expl;
			$destino = $pastaArquivo . $novo_nome;

			move_uploaded_file($_FILES['Arquivo']['tmp_name'][$i], $destino);

			$query = $con->prepare('CALL Proc_VariacaoArquivos_I (:IDVariacao, :Nome, :Tipo)');
			$query->bindValue(':IDVariacao', $IDVariacao);
			$query->bindValue(':Nome', $novo_nome);
			$query->bindValue(':Tipo', 'A');
			$query->execute();
			$query->closeCursor();
			$i++;
			if (!isset($_FILES['Arquivo']['name'][$i])) {
				break;
			}
		}
	}

	$extensao = explode(".", $_FILES['Imagem']['name']);
	$expl = $extensao[count($extensao) - 1];
	$novo_nome = md5(date('Y-m-d H:i:s')) . "." . $expl;
	$destino = $pastaImg . $novo_nome;
	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino);

	$query = $con->prepare('CALL Proc_VariacaoArquivos_I (:IDVariacao, :Nome, :Tipo)');
	$query->bindValue(':IDVariacao', $IDVariacao);
	$query->bindValue(':Nome', $novo_nome);
	$query->bindValue(':Tipo', 'I');
	$query->execute();
	$query->closeCursor();

	$i = 1;
	while ($i <= $_POST['quantEspe']) {
		if (isset($_POST['Nome' . $i]) && isset($_POST['IDSubMaterial' . $i])) {
			$query = $con->prepare('CALL Proc_Especificacao_I (:IDSubMaterial, :IDVariacao,  :Nome)');
			$query->bindValue(':IDVariacao', $IDVariacao);
			$query->bindValue(':IDSubMaterial', $_POST['IDSubMaterial' . $i]);
			$query->bindValue(':Nome', $_POST['Nome' . $i]);
			$query->execute();
			$query->closeCursor();
		}
		$i++;
	}
}

if ($_GET['option'] == 'update') {

	$query = $con->prepare('CALL Proc_Variacao_S_U (:IDVariacao)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$nomeAntigo = $res->Nome;
	$query->closeCursor();

	$query = $con->prepare('CALL Proc_Variacao_U (:IDVariacao, :IDProduto, :IDTipo, :IDSituacao, :StyleName, :StockNumber, :Estacao, :Nome, :Obs)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->bindValue(':IDTipo', $_POST['IDTipo']);
	$query->bindValue(':IDSituacao', $_POST['IDSituacao']);
	$query->bindValue(':StyleName', $_POST['StyleName']);
	$query->bindValue(':StockNumber', $_POST['StockNumber']);
	$query->bindValue(':Estacao', $_POST['Estacao']);
	$query->bindValue(':Nome', strtoupper($_POST['Nome']));
	$query->bindValue(':Obs', $_POST['Obs']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$Referencia = $res->Referencia;
	$query->closeCursor();

	$pastaV = '../variacoes/' . $Referencia . '/' . strtoupper($nomeAntigo);
	$pastaN = '../variacoes/' . $Referencia . '/' . strtoupper($_POST['Nome']);
	if ($nomeAntigo != $_POST['Nome']) {
		rename($pastaV, $pastaN);
	}
	$pastaArquivo = '../variacoes/' . $Referencia . '/' . strtoupper($_POST['Nome']) . '/arquivos/';
	$pastaImg = '../variacoes/' . $Referencia . '/' . strtoupper($_POST['Nome']) . '/img/';

	$i = 0;
	while ($_FILES['Arquivo']['name'][$i]) {
		$extensao = explode(".", $_FILES['Arquivo']['name'][$i]);
		$expl = $extensao[count($extensao) - 1];
		$novo_nome = md5(date('Y-m-d H:i:s')) . $i . "." . $expl;
		$destino = $pastaArquivo . $novo_nome;

		move_uploaded_file($_FILES['Arquivo']['tmp_name'][$i], $destino);

		$query = $con->prepare('CALL Proc_VariacaoArquivos_I (:IDVariacao, :Nome, :Tipo)');
		$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
		$query->bindValue(':Nome', $novo_nome);
		$query->bindValue(':Tipo', 'A');
		$query->execute();
		$query->closeCursor();
		$i++;
		if (!isset($_FILES['Arquivo']['name'][$i])) {
			break;
		}
	}

	$extensao = explode(".", $_FILES['Imagem']['name']);
	$expl = $extensao[count($extensao) - 1];
	$novo_nome = md5(date('Y-m-d H:i:s')) . "." . $expl;
	$destino = $pastaImg . $novo_nome;
	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino);

	$query = $con->prepare('CALL Proc_VariacaoArquivos_I (:IDVariacao, :Nome, :Tipo)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->bindValue(':Nome', $novo_nome);
	$query->bindValue(':Tipo', 'I');
	$query->execute();
	$query->closeCursor();

	$query = $con->prepare('CALL Proc_Especificacao_D (:IDVariacao)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->execute();
	$query->closeCursor();
	$i = 1;
	while ($i <= $_POST['quantEspe']) {
		if (isset($_POST['Nome' . $i]) && isset($_POST['IDSubMaterial' . $i])) {
			$query = $con->prepare('CALL Proc_Especificacao_I (:IDSubMaterial, :IDVariacao, :Nome)');
			$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
			$query->bindValue(':IDSubMaterial', $_POST['IDSubMaterial' . $i]);
			$query->bindValue(':Nome', $_POST['Nome' . $i]);
			$query->execute();
			$query->closeCursor();
		}
		$i++;
	}
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_Especificacao_D (:IDVariacao)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->execute();
	$query->closeCursor();
	$query = $con->prepare('CALL Proc_VariacaoArquivos_D (:IDVariacao)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->execute();
	$query->closeCursor();
	$query = $con->prepare('CALL Proc_Variacao_D (:IDVariacao)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$Referencia = $res->Referencia;
	$Nome = $res->Nome;
	$query->closeCursor();
	$pasta = '../variacoes/' . $Referencia . '/' . strtoupper($Nome);
	deleteDirectory($pasta);
}

if ($_GET['option'] == 'duplica') {
	$query = $con->prepare('CALL Proc_VariacaoDuplicar (:IDVariacao, :IDProdutoNovo, :IDProdutoVelho)');
	$query->bindValue(':IDVariacao', $_POST['IDVariacao']);
	$query->bindValue(':IDProdutoNovo', $_POST['IDProdutoNovo']);
	$query->bindValue(':IDProdutoVelho', $_POST['IDProdutoVelho']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$ReferenciaVelha = $res->ReferenciaVelha;
	$ReferenciaNova = $res->ReferenciaNova;
	$NomeVelho = $res->NomeVelho;
	$NomeNovo = $res->NomeNovo;
	$IDNovo = $res->IDNovo;
	$query->closeCursor();
	$pastaAntiga = '../variacoes/' . $ReferenciaVelha . '/' . strtoupper($NomeVelho);
	$pastaNova = '../variacoes/' . $ReferenciaNova . '/' . strtoupper($NomeNovo);
	copiaDiretorio($pastaAntiga, $pastaNova);
	echo $IDNovo;
}
