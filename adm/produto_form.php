<?php $pagina = 'TodosProdutos';
$SubPagina = 'Produtos'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
</head>

<body class="g-sidenav-show vh-100 bg-gray-100">
    <?php include 'header.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include 'menu_topo.php'; ?>
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="float-start">Cadastro de Produtos</h6>
                            <p class="text-end m-0">
                                <a href="produtocapa_list.php" class="btn bg-gradient-danger btn-xs py-2 px-3 m-0 icon-btn" title="Adicionar">
                                    <i class="fa fa-arrow-left me-1"></i> voltar
                                </a>
                            </p>
                        </div>
                        <div class="card-body pb-2">
                            <form id="formCadastro">
                                <div class="row">
                                    <div class="col-12 col-md-3 form-group">
                                        <label for="NomeProduto">NOME</label>
                                        <input type="text" class="form-control" id="NomeProduto" name="NomeProduto" maxlength="255" required>
                                    </div>
                                    <div class="col-12 col-md-3 form-group">
                                        <label for="IDCategoria">Categoria</label>
                                        <select class="form-control" id="IDCategoria" name="IDCategoria" required>
                                            <option value="" style="display: none;">Selecione</option>
                                            <?php
                                            $query = $con->prepare('CALL Proc_S_Categorias');
                                            $query->execute();
                                            $res = $query->fetchAll(PDO::FETCH_OBJ);
                                            $query->closeCursor();
                                            foreach ($res as $res) {
                                            ?>
                                                <option value="<?= $res->IDCategoria ?>"><?= $res->NomeCategoria ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="col-12 col-md-3 form-group">
                                        <label for="NomeMaterial">Material</label>
                                        <input type="text" class="form-control" id="NomeMaterial" name="NomeMaterial" maxlength="255" required>
                                    </div>
                                    <div class="col-12 col-md-3 form-group">
                                        <label for="NomePalmilha">Palmilha</label>
                                        <input type="text" class="form-control" id="NomePalmilha" name="NomePalmilha" maxlength="255" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-10 form-group">
                                        <label for="NomeImagem">Imagem</label>
                                        <input type="file" class="form-control" id="NomeImagem"<?= isset($_GET['IDProduto']) ? $nome = 'NomeImagem' : $nome = 'NomeImagem[]' ?> name="<?= $nome ?>" accept="image/*" maxlength="255" multiple <?= isset($_GET['IDProduto']) ? '' : 'required' ?>>
                                    </div>
                                    <div class="col-12 col-md-2 form-group">
                                        <label for="Numeracao">Numeração</label>
                                        <input type="text" class="form-control" id="Numeracao" name="Numeracao" maxlength="255" required>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="salvar" class="btn btn-dark d-block mx-auto px-3 py-2">
                                        <i class="fa-solid fa-floppy-disk me-2"></i>SALVAR
                                    </button>
                                    <input type="hidden" name="IDProduto" id="IDProduto">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'js.php'; ?>
    <script>
        $('#formCadastro').validate({
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            errorPlacement: function() {
                return false; //REMOVER MENSAGENS
            },
            submitHandler: function(form) {
                $('#salvar').html('SALVANDO...').attr('disabled', '');

                var fi = document.getElementById('NomeImagem');
                var quant = fi.files.length;
                var formData = new FormData($(form)[0]);
                var option = $('#IDProduto').val() == '' ? 'insert' : 'update';

                $.ajax({
                    type: 'POST',
                    url: 'assets/ajax/produto.php?option=' + option,
                    data: formData,
                    processData: false,
                    contentType: false
                }).done(function(response) {
                    window.location.href = 'produtotodos_list.php';
                });
            }
        });


        <?php if (isset($_GET['IDProduto']) && !empty($_GET['IDProduto'])) { ?>

            $.post('assets/ajax/produto.php?option=select', {
                    IDProduto: '<?= $_GET['IDProduto'] ?>'
                })
                .done(function(response) {
                    response = JSON.parse(response);

                    $('#NomeProduto').val(response.NomeProduto);
                    $('#Numeracao').val(response.Numeracao);
                    $('#NomeMaterial').val(response.NomeMaterial);
                    $('#NomePalmilha').val(response.NomePalmilha);
                    $('#IDCategoria').val(response.IDCategoria);
                    $('#Capa').val(response.Capa);
                    $('#IDProduto').val(response.IDProduto);
                });

        <?php } ?>
    </script>
</body>

</html>