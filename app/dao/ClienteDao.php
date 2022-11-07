<?php
include_once('../conection/Conection.php');
class ClienteDao{
    public function create(Cliente $cliente){
        try{
            $sql = "INSERT INTO clientes
                (cd_cliente, nm_nome, ds_endereco, nr_numero, tp_cliente, nr_documento, ds_cidade, cd_uf, nr_telefone, nr_inscricao)
                VALUES(NULL, :nome, :endereco, :numero, :tipo, :documento, :cidade, :uf, :telefone, :inscricao)
            ";

            $prepared_sql = Conection::getConection()->prepare($sql);

            $prepared_sql->bindValue(":nome", $cliente->getNome());
            $prepared_sql->bindValue(":endereco", $cliente->getEndereco());
            $prepared_sql->bindValue(":numero", $cliente->getNumero());
            $prepared_sql->bindValue(":tipo", $cliente->getTipo());
            $prepared_sql->bindValue(":documento", $cliente->getNumeroDocumento());
            $prepared_sql->bindValue(":cidade", $cliente->getCidade());
            $prepared_sql->bindValue(":uf", $cliente->getUf());
            $prepared_sql->bindValue(":telefone", $cliente->getTelefone());
            $prepared_sql->bindValue(":inscricao", $cliente->getIncricao());

            return $prepared_sql->execute();
        }catch (Exception $e) {
            echo "Deu ruim <br>" . $e . '<br>';
        }
    }
}

?>