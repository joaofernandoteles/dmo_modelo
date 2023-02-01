        <?php

        require_once '../../../assets/include/config.php';

        $conexao = new conexao();
        $con = $conexao->conecta();


        if ($_GET['option'] == 'select') {
            $query = $con->prepare('EXEC Proc_S_ItensSelecionados :IDListaCasamento');
            $query->bindValue(':IDListaCasamento', $_POST['IDListaCasamento']);
            $query->execute();
            $res = $query->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($res);
            $query->closeCursor();
        }

        if ($_GET['option'] == 'insert') {

            $extensao1 = explode('.', $_FILES['Foto']['name']);
            $novo_nome = md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
            $destino1 = '../img/' . $novo_nome;
            move_uploaded_file($_FILES['Foto']['tmp_name'], $destino1);

            $query = $con->prepare('EXEC Proc_I_Lista :Nome2, :Cidade, :Estado, :Data, :Foto, :NomeMaeNoiva, :NomePaiNoiva, :CEPNoiva, :BairroNoiva, :EnderecoNoiva, :NumeroNoiva, :TelefoneNoiva, :CPFNoiva, :MailNoiva, :Nome1, :NomeMaeNoivo, :NomePaiNoivo, :CEPNoivo, :BairroNoivo, :EnderecoNoivo, :TelefoneNoivo, :NumeroNoivo, :CPFNoivo, :MailNoivo, :SenhaLista, :ComplementoNoivo, :ComplementoNoiva');

            $query->bindValue(':Nome2', $_POST['Nome2']);
            $query->bindValue(':Cidade', $_POST['Cidade']);
            $query->bindValue(':Estado', $_POST['Estado']);
            $query->bindValue(':Data', date('Y-m-d', strtotime($_POST['Data'])));
            $query->bindValue(':Foto', $novo_nome);
            $query->bindValue(':NomeMaeNoiva', $_POST['NomeMaeNoiva']);
            $query->bindValue(':NomePaiNoiva', $_POST['NomePaiNoiva']);
            $query->bindValue(':CEPNoiva', $_POST['CEPNoiva']);
            $query->bindValue(':BairroNoiva', $_POST['BairroNoiva']);
            $query->bindValue(':EnderecoNoiva', $_POST['EnderecoNoiva']);
            $query->bindValue(':NumeroNoiva', $_POST['NumeroNoiva']);
            $query->bindValue(':TelefoneNoiva', $_POST['TelefoneNoiva']);
            $query->bindValue(':CPFNoiva', $_POST['CPFNoiva']);
            $query->bindValue(':MailNoiva', $_POST['MailNoiva']);
            $query->bindValue(':Nome1', $_POST['Nome1']);
            $query->bindValue(':NomeMaeNoivo', $_POST['NomeMaeNoivo']);
            $query->bindValue(':NomePaiNoivo', $_POST['NomePaiNoivo']);
            $query->bindValue(':CEPNoivo', $_POST['CEPNoivo']);
            $query->bindValue(':BairroNoivo', $_POST['BairroNoivo']);
            $query->bindValue(':EnderecoNoivo', $_POST['EnderecoNoivo']);
            $query->bindValue(':TelefoneNoivo', $_POST['TelefoneNoivo']);
            $query->bindValue(':NumeroNoivo', $_POST['NumeroNoivo']);
            $query->bindValue(':CPFNoivo', $_POST['CPFNoivo']);
            $query->bindValue(':MailNoivo', $_POST['MailNoivo']);
            $query->bindValue(':SenhaLista',  $_POST['SenhaLista']);
            $query->bindValue(':ComplementoNoivo',  $_POST['ComplementoNoivo']);
            $query->bindValue(':ComplementoNoiva',  $_POST['ComplementoNoiva']);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_OBJ);
            echo $res->IDListaCasamento;
            $query->closeCursor();
        }

        if ($_GET['option'] == 'update') {

            $query = $con->prepare('CALL Proc_S_RecursoArquivo (:IDRecurso)');
            $query->bindValue(':IDRecurso', $_POST['IDRecurso']);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_OBJ);
            $nome = $res->Documento;
            $query->closeCursor();


            if (isset($_FILES['Documento']['name']) && !empty($_FILES['Documento']['name'])) {
                $nome = $_FILES['Documento']['name'];
                $destino = $destino = '../arquivos/recurso/' . $nome;
                move_uploaded_file($_FILES['Documento']['tmp_name'], $destino);
            }


            $query = $con->prepare('CALL Proc_U_Recurso (:IDRecurso, :DataFinal, :Documento, :EnviadoRecurso, :RecursoAceito , :Justificativa)');
            $query->bindValue(':IDRecurso', $_POST['IDRecurso']);
            $query->bindValue(':DataFinal', $_POST['DataFinal']);
            $query->bindValue(':Documento', $nome);
            $query->bindValue(':EnviadoRecurso', $_POST['EnviadoRecurso']);
            $query->bindValue(':RecursoAceito', $_POST['RecursoAceito']);
            $query->bindValue(':Justificativa', $_POST['Justificativa']);
            $query->execute();
            $query->closeCursor();
        }

        if ($_GET['option'] == 'delete') {
            $query = $con->prepare('CALL Proc_D_Recurso (:IDRecurso)');
            $query->bindValue(':IDRecurso', $_POST['IDRecurso']);
            $query->execute();
            $query->closeCursor();

            while ($res = $query->fetch(PDO::FETCH_OBJ)) {
                unlink('../arquivos/recurso/' . $res->Documento);
            }
        }

        $query->bindValue(':Nome2', $_POST['Nome2']);
        $query->bindValue(':Cidade', $_POST['Cidade']);
        $query->bindValue(':Estado', $_POST['Estado']);
        $query->bindValue(':Data', date('Y-m-d', strtotime($_POST['Data'])));
        $query->bindValue(':Foto', $novo_nome);
        $query->bindValue(':NomeMaeNoiva', $_POST['NomeMaeNoiva']);
        $query->bindValue(':NomePaiNoiva', $_POST['NomePaiNoiva']);
        $query->bindValue(':CEPNoiva', $_POST['CEPNoiva']);
        $query->bindValue(':BairroNoiva', $_POST['BairroNoiva']);
        $query->bindValue(':EnderecoNoiva', $_POST['EnderecoNoiva']);
        $query->bindValue(':NumeroNoiva', $_POST['NumeroNoiva']);
        $query->bindValue(':TelefoneNoiva', $_POST['TelefoneNoiva']);
        $query->bindValue(':CPFNoiva', $_POST['CPFNoiva']);
        $query->bindValue(':MailNoiva', $_POST['MailNoiva']);
        $query->bindValue(':Nome1', $_POST['Nome1']);
        $query->bindValue(':NomeMaeNoivo', $_POST['NomeMaeNoivo']);
        $query->bindValue(':NomePaiNoivo', $_POST['NomePaiNoivo']);
        $query->bindValue(':CEPNoivo', $_POST['CEPNoivo']);
        $query->bindValue(':BairroNoivo', $_POST['BairroNoivo']);
        $query->bindValue(':EnderecoNoivo', $_POST['EnderecoNoivo']);
        $query->bindValue(':TelefoneNoivo', $_POST['TelefoneNoivo']);
        $query->bindValue(':NumeroNoivo', $_POST['NumeroNoivo']);
