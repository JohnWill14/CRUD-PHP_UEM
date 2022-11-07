<?php
include_once("../model/Cliente.php");
include_once("../dao/ClienteDao.php");


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

if(isset($_POST['method'])&&$_POST['method']=='post'){
    $cliente = getCliente($valores_post);
    $clienteDao->create($cliente);
    header("Location: ../../");
}

?>