<?php
include("header.php");

?>

<body>
    <?php


    $clienteDao = new ClienteDao();
    ?>
    <div class="container">
        <br />
        <br />
        <br />
        <div class="d-flex justify-content-between">
            <h1>Lista de clientes</h1>
            <a id="right-btn" class="btn btn-success " title="cadastrar cliente" href="http://localhost:8080/cadastrar.php"><img
                    src="assets/image/add-user.png" /></a>
        </div>

        <br />
        <br />
        <?php
        if (isset($_SESSION['ERRO_DE'])) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                    Houve um erro ao excluir esse cliente</div>";
            unset($_SESSION['ERRO_DE']);
        }
        ?>
        <div class="">
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Número</th>
                        <th scope="col">Tipo de cliente</th>
                        <th scope="col">Estado</th>
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
                            <?php echo $cliente->getUf() ; ?>
                        </td>
                        <td>
                            <?php echo $cliente->getTelefone() == "" ? "-":$cliente->getTelefone(); ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" title="ver/alterar cliente <?php echo $cliente->getNome(); ?>"
                                href="<?php echo 'http://localhost:8080/alterar.php?id=' . $cliente->getCodigo(); ?>"><img
                                    src="assets/image/see.png" /></a>
                            <button class="btn btn-danger" title="excluir cliente <?php echo $cliente->getNome(); ?>"
                                onclick="confirma(<?php echo $cliente->getCodigo(); ?>);"><img
                                    src="assets/image/lixo.png" /></button>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br />

        <br />
    </div>

    <script src="./assets/js/uf.js"></script>
    <script src="./assets/js/valida.js"></script>
    <script>
        $("#notify").hide();
    </script>

    <script src="assets/boo/js/bootstrap.min.js"></script>
    <script>
        function confirma(id) {
            var b = confirm('deseja excluir mesmo ?');
            if (b) {
                window.location.href = "./app/controller/ClienteController.php?method=delete&id=" + id;
            }
        }
    </script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
</body>

</html>