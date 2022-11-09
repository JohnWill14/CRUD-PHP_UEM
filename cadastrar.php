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
    <br />
    <div class="container">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Cadastro</h1>
                <div class="erro">
                    <ul id="disney" class="text-danger"> </ul>
                </div>
                <form action="./app/controller/ClienteController.php?method=post" method="post">
                    <input hidden="true" name="method" value="post" />
                    <div class="mb-3 row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome*</label>
                        <div class="col-sm-8">
                            <input name="nome" type="text" class="form-control" id="nome" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-sm-2 col-form-label">Endereco*</label>
                        <div class="col-sm-8">
                            <input name="endereco" type="text" class="form-control" id="endereco" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 row">
                            <div class="col-6 ">
                                <label for="numero" class="col-sm-4 col-form-label">Numero*</label>
                                <div class="col-sm-10">
                                    <input name="numero" type="text" class="form-control" id="numero" required>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <label for="tipo" class="col-sm-6 col-form-label">Tipo cliente*</label>
                                <div class="col-sm-10">
                                    <select id="tipo" name="tipo" class="form-select"
                                        aria-label="Default select example" required>
                                        <option disabled selected>seleciona</option>
                                        <option value="1">Juridico</option>
                                        <option value="2">Física</option>
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
                                    <input name="numerodoc" type="text" class="form-control" id="numerodoc" required>
                                </div>
                            </div>
                            <div class="col-4 ">

                                <label for="cidade" class="col-sm-4 col-form-label">Cidade*</label>
                                <br />
                                <br />
                                <div class="col-sm-10">
                                    <input name="cidade" type="text" class="form-control" id="cidade" required>
                                </div>
                            </div>

                            <div class="col-4 ">

                                <label for="uf" class="col-sm-4 col-form-label">Uf*</label>
                                <br />
                                <br />
                                <div class="col-sm-10">
                                    <select class="form-select" name="uf" class="form-control" id="uf" required>
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
                                    <input name="telefone" type="text" class="form-control" id="telefone">
                                </div>
                            </div>
                            <div class="col-6 ">

                                <label for="inscricao" class="col-sm-4 col-form-label">Inscricao</label>
                                <div class="col-sm-10">
                                    <input name="inscricao" type="text" class="form-control" id="inscricao">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="btn-form" class="al-right ">
                            <button type="reset" class="btn btn-danger ">limpar</button>
                            <button id="cad" type="submit" class="btn btn-success">cadastrar</button>
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