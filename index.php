<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <?php
    include_once("app/model/Cliente.php");
    include_once("app/dao/ClienteDao.php");
    include_once("app/conection/Conection.php");

    $clienteDao = new ClienteDao();
    ?>
    <div class="container">
        <br />
        <br />
        <br />
        <div class="d-flex justify-content-between">
            <h1>Lista de clientes</h1>
            <a id="right-btn" class="btn btn-success " href="http://localhost:8080/cadastrar.php">Cadastrar cliente</a>
        </div>

        <br />
        <br />
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Número</th>
                    <th scope="col">Tipo de cliente</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($clienteDao->findAll() as $cliente) {
            ?>
                <tr>
                    <th scope="row">
                        <?php echo $cliente->getCodigo(); ?>
                    </th>
                    <td>
                        <?php echo $cliente->getNome(); ?>
                    </td>
                    <td>
                        <?php echo $cliente->getNumero(); ?>
                    </td>
                    <td>
                        <?php echo $cliente->getTipo() == 1 ? "Juridico" : "Físico"; ?>
                    </td>
                    <td>
                        <?php echo $cliente->getTelefone(); ?>
                    </td>
                    <td>
                        <a class="btn btn-primary"
                            href="<?php echo 'http://localhost:8080/alterar.php?id=' . $cliente->getCodigo(); ?>"><img
                                src="assets/image/see.png" /></a>
                        <button class="btn btn-danger" onclick="confirma(<?php echo $cliente->getCodigo(); ?>);"><img
                                src="assets/image/lixo.png" /></button>
                    </td>
                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>

        <br />

        <br />
    </div>

    <script src="./assets/js/uf.js"></script>
    <script src="./assets/js/valida.js"></script>
    <script>
        $("#notify").hide();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <script>
        function confirma(id) {
            var b = confirm('deseja excluir mesmo ?');
            if (b) {
                window.location.href = "./app/controller/ClienteController.php?method=delete&id=" + id;
            }
        }
    </script>
</body>

</html>