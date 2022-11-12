<?php
session_start();
function validSession(){
    if(!isset($_SESSION['user'])){
        $_SESSION['ERRO'] = "login/user incorreto";
        header("Location: ../../");
    }else{
        unset($_SESSION['ERRO']);
    }
}

function validSessionMessage($message){
    if(!isset($_SESSION['user'])){
        $_SESSION['ERRO'] = $message;
        header("Location: ../../");
    }else{
        unset($_SESSION['ERRO']);
    }
}


function telaLogin(){
        header("Location: ../../");
}


?>