<?php
include_once("../util/session.php");
include_once("../model/Cliente.php");
include_once("../dao/ClienteDao.php");
validSessionMessage("Faça login no sistema para continuar");

$clienteDao = new ClienteDao();

$valores_post = filter_input_array(INPUT_POST);

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

if(isset($_GET['method'])&&$_GET['method']=='post'){
    $cliente = getCliente($valores_post);
    try{
        $clienteDao->create($cliente);
    }catch(Exception $e){
        $_SESSION['ERRO_CR'] = $e;
    }

    if(!isset($_SESSION['ERRO_CR'])){
        header("Location: ../../lista.php");
    }else{
        header("Location: ../../cadastrar.php");
    }

}else if(isset($_GET['method'])&&$_GET['method']=='update'){
    $cliente = getCliente($valores_post);
    $cliente->setCodigo($valores_post['codigo']);
    try{
        $clienteDao->update($cliente);
    }catch(Exception $e){
        $_SESSION['ERRO_UP'] = $e;
       
    }
    if(!isset($_SESSION['ERRO_UP'])){
        header("Location: ../../lista.php");
    }else{
        header("Location: ../../alterar.php?id=".$cliente->getCodigo());
    }

} else if(isset($_GET['method'])&&$_GET['method']=='delete'&&isset($_GET['id'])){
    $id = $_GET['id'];
    
    try{
        $clienteDao->delete($id);
    }catch(Exception $e){
        $_SESSION['ERRO_DE'] = $e;
    }
    header("Location: ../../lista.php");
}

?>