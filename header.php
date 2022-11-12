<?php
    include_once("app/model/Cliente.php");
    include_once("app/dao/ClienteDao.php");
    include_once("app/conection/Conection.php");
    include_once("app/util/session.php");
    validSession();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC</title>
    <link rel="icon" type="imagem/png" href="assets/image/icon.png" />
    <link rel="stylesheet" href="./assets/css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/boo/css/bootstrap.min.css" />
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">SGC =></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="lista.php">Listar cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar.php">Cadastrar novo cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

  </div>
</nav>