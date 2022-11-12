<?php
include_once("app/util/session.php");
?>
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
    if(isset($_SESSION['ERRO'])){
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        ".$_SESSION['ERRO']."</div>";
        unset($_SESSION['ERRO']);
    }        
    ?>
<main class="form-signin" style="margin: auto; width: 30%;">
    
  <form action="app/controller/UsuarioController.php?method=login" method="post" style="margin-top: 10%;">
   <h1>Sistema gerenciador de clientes</h1>

    <div class="form-floating">
      <input type="Login" name="login" class="form-control" id="floatingInput" placeholder="yuripa07">
      <label for="floatingInput">Login</label>
    </div>
    <br/>
    <br/>
    <div class="form-floating">
      <input type="password" login="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <br/>
    <br/>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

  </form>
</main>


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