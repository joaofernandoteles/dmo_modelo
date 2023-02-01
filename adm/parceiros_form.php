<?php $pagina = 'Parceiros'; ?>

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
                            <h6 class="float-start">Cadastro de Parceiros</h6>
                            <p class="text-end m-0">
                                <a href="parceiros_list.php" class="btn bg-gradient-danger btn-xs py-2 px-3 m-0 icon-btn" title="Adicionar">
                                    <i class="fa fa-arrow-left me-1"></i> voltar
                                </a>
                            </p>
                        </div>
                        <div class="card-body pb-2">
                            <form id="formCadastro">
                                <div class="row">
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="Nome">NOME</label>
                                        <input type="text" class="form-control" id="Nome" name="Nome" maxlength="255" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="Link">Link</label>
                                        <input type="text" class="form-control" id="Link" name="Link" maxlength="255" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 form-group">
                                        <label for="Imagem">Imagem</label>
                                        <input type="file" class="form-control" id="Imagem" name="Imagem" accept="image/*" maxlength="255" <?= isset($_GET['IDParceiros']) ? '' : 'required' ?>>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="salvar" class="btn btn-dark d-block mx-auto px-3 py-2">
                                        <i class="fa-solid fa-floppy-disk me-2"></i>SALVAR
                                    </button>
                                    <input type="hidden" name="IDParceiros" id="IDParceiros">
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

                var formData = new FormData($(form)[0]);
                var option = $('#IDParceiros').val() == '' ? 'insert' : 'update';

                $.ajax({
                    type: 'POST',
                    url: 'assets/ajax/parceiros.php?option=' + option,
                    data: formData,
                    processData: false,
                    contentType: false
                }).done(function(response) {
                    window.location.href = 'parceiros_list.php';    
                });
            }
        });

        <?php if (isset($_GET['IDParceiros']) && !empty($_GET['IDParceiros'])) { ?>

            $.post('assets/ajax/parceiros.php?option=select', {
                IDParceiros: '<?= $_GET['IDParceiros'] ?>'
                })
                .done(function(response) {
                    response = JSON.parse(response);

                    $('#Nome').val(response.Nome);
                    $('#Link').val(response.Link);
                    $('#IDParceiros').val(response.IDParceiros);
                });

        <?php } ?>
    </script>
</body>

</html>