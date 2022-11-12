<?php
include_once("app/util/session.php");
validSession();
include("header.php");
?>

<body>


<?php
        include_once("app/model/Cliente.php");
        include_once("app/dao/ClienteDao.php");
        include_once("app/conection/Conection.php");

        $clienteDao = new ClienteDao();

        function getCliente($valores_post){
            $cliente = new Cliente();
            $cliente->setNome($valores_post['nome']);
            $cliente->setEndereco($valores_post['endereco']);
            $cliente->setNumero($valores_post['numero']);
            $cliente->setTipo($valores_post['tipo']);
            $cliente->setNumeroDocumento($valores_post['numerodoc']);
            $cliente->setCidade($valores_post['cidade']);
            $cliente->setTelefone($valores_post['telefone']."");
            $cliente->setIncricao($valores_post['inscricao'] == "" ? 0:$valores_post['inscricao']);
            $cliente->setUf($valores_post['uf']);
            return $cliente;
        }
        
        $clienteAlt = $clienteDao->findByID($_GET['id']);
    ?>
    
    <br/>
    <div class="container">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Alterar Cliente</h1>
                <div class="erro">
                    <ul id="disney" class="text-danger"> </ul>
                </div>
                <?php
                if(isset($_SESSION['ERRO_UP'])){
                    echo "<div class=\"alert alert-danger\" role=\"alert\">
                        Houve um erro, confira os campos digitados para o usuário. Há campos que podem 
                        estar duplicados ou incorretos confira!!!
                    </div>";
                    unset($_SESSION['ERRO_UP']);
                }        
                ?>
                <form action="./app/controller/ClienteController.php?method=update" onsubmit="return validarForm();" method="post">
                    <input hidden="true" name="codigo" value="<?php echo $clienteAlt->getCodigo(); ?>" />
                    <div class="mb-3 row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome*</label>
                        <div class="col-sm-8">
                            <input name="nome" placeholder="joãozinho, luizinho, claudinho..." type="text" class="form-control" id="nome"
                                value="<?php echo $clienteAlt->getNome(); ?>" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-sm-2 col-form-label">Endereco*</label>
                        <div class="col-sm-8">
                            <input name="endereco" placeholder="Avenida Lins de Vasconcelos, 234." type="text" class="form-control" id="endereco"
                                value="<?php echo $clienteAlt->getEndereco(); ?>" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 row">
                            <div class="col-6 ">
                                <label for="numero" class="col-sm-4 col-form-label">Numero*</label>
                                <div class="col-sm-10">
                                    <input name="numero" placeholder="456" type="text" class="form-control" id="numero"
                                        value="<?php echo $clienteAlt->getNumero(); ?>" required>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <label for="tipo" class="col-sm-6 col-form-label">Tipo cliente*</label>
                                <div class="col-sm-10">
                                    <select id="tipo" name="tipo" class="form-select"
                                        aria-label="Default select example" required>
                                        <option disabled>seleciona</option>
                                        <option value="1" <?php  echo $clienteAlt->getTipo()=="1"?"selected":"";?>>Juridico</option>
                                        <option value="2" <?php  echo $clienteAlt->getTipo()=="2"?"selected":"";?>>Físico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 row">
                            <div class="col-4 ">
                                <label for="numerodoc" class="col-sm-4 col-form-label">Numero documento*</label>
                                <div class="col-sm-10">
                                    <input name="numerodoc" placeholder="4546575" type="text" class="form-control" id="numerodoc"
                                        value="<?php echo $clienteAlt->getNumeroDocumento(); ?>" required>
                                </div>
                            </div>
                            <div class="col-4 ">

                                <label for="cidade" class="col-sm-4 col-form-label">Cidade*</label>
                                <br />
                                <br />
                                <div class="col-sm-10">
                                    <input name="cidade" placeholder="São Paulo, Paris, Nova Iorque, Rio de Janeiro, entre outras." type="text" class="form-control" id="cidade"
                                        value="<?php echo $clienteAlt->getCidade(); ?>" required>
                                </div>
                            </div>

                            <div class="col-4 ">

                                <label for="uf" class="col-sm-4 col-form-label">Uf*</label>
                                <br />
                                <br />    
                                <div class="col-sm-10">
                                    <input id="uf-value" hidden="true" value="<?php echo $clienteAlt->getUf(); ?>" />
                                    <select class="form-select" name="uf" class="form-control uf" id="uf"
                                        required>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 row">
                            <div class="col-6 ">
                                <label for="telefone" class="col-sm-4 col-form-label">Telefone</label>
                                <div class="col-sm-10">
                                    <input name="telefone"  placeholder="(54)89564-8975" type="text" class="form-control" id="telefone"
                                        value="<?php echo $clienteAlt->getTelefone(); ?>" maxlength="14" data-js="phone">
                                </div>
                            </div>
                            <div class="col-6 ">

                                <label for="inscricao" class="col-sm-4 col-form-label">Inscricao</label>
                                <div class="col-sm-10">
                                    <input name="inscricao" type="text" class="form-control" id="inscricao"
                                        value="<?php echo $clienteAlt->getIncricao(); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="btn-form" class="al-right ">
                            <button type="reset" class="btn btn-danger ">limpar</button>
                            <button id="cad" type="submit" class="btn btn-warning">alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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
</body>

</html>