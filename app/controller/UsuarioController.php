<?php
include_once("../util/session.php");
include_once("../model/Usuario.php");
include_once("../dao/UsuarioDao.php");



$usuarioDao = new UsuarioDao();

$valores_post = filter_input_array(INPUT_POST);

function getUsuario($valores_post){
    $usuario = new Usuario();

    $usuario->setLogin($valores_post['login']);
    $usuario->setPassword($valores_post['password']);
    $usuario->setName($valores_post['name']);
    $usuario->setEmail($valores_post['email']);
    $usuario->setDt_access($valores_post['dt_access']);
    $usuario->setBo_deleted($valores_post['bo_deleted']);

    return $usuario;
}

if(isset($_GET['method'])&&$_GET['method']=='login'){
    
    $usuarioDao->login($valores_post['login'], $valores_post['password']);

    validSession();
   
    if(!isset($_SESSION['user'])){
        $_SESSION['ERRO'] = "login/password invalid";
        header("Location: ../../");
        return;
    }

    header("Location: ../../lista.php");
}

?>