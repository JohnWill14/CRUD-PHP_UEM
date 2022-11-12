<?php
include_once("../util/session.php");
include_once('../conection/Conection.php');
class ClienteDao{
    public function create(Cliente $cliente){
        try{
            $sql = "INSERT INTO clientes
                (cd_cliente, nm_nome, ds_endereco, nr_numero, tp_cliente, nr_documento, ds_cidade, cd_uf, nr_telefone, nr_inscricao)
                VALUES(NULL, :nome, :endereco, :numero, :tipo, :documento, :cidade, :uf, :telefone, :inscricao)";

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
            throw new Exception($e);
        }
    }

    public function update(Cliente $cliente){
        try{
            $sql = "UPDATE clientes
                 set nm_nome = :nome, ds_endereco = :endereco, nr_numero = :numero, tp_cliente = :tipo, nr_documento = :documento, ds_cidade = :cidade, cd_uf = :uf, nr_telefone = :telefone, nr_inscricao = :inscricao
                WHERE cd_cliente = :codigo";

            $prepared_sql = Conection::getConection()->prepare($sql);

            $prepared_sql->bindValue(":codigo", $cliente->getCodigo());
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
            throw new Exception($e);
        }
    }

    public function delete($id){
        try{
            $sql = "DELETE FROM clientes
                WHERE cd_cliente = :codigo";

            $prepared_sql = Conection::getConection()->prepare($sql);
            $prepared_sql->bindValue(":codigo", $id);

            return $prepared_sql->execute();
        }catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function findAll(){
        try{
            $sql = "SELECT cd_cliente, nm_nome, ds_endereco, nr_numero, tp_cliente, nr_documento, ds_cidade, cd_uf, nr_telefone, nr_inscricao  FROM clientes";
            $result = Conection::getConection()->query($sql);
            $listaString = $result->fetchAll(PDO::FETCH_ASSOC);
            $clientes = array();
            foreach ($listaString as $c) {
                $clientes[] = $this->getCliente($c);
            }

            return $clientes;
        }catch(Exception $e){
            throw new Exception($e);
        }
    }

    public function findByID($id){
        try{
            $sql = "SELECT cd_cliente, nm_nome, ds_endereco, nr_numero, tp_cliente, nr_documento, ds_cidade, cd_uf, nr_telefone, nr_inscricao  FROM clientes WHERE cd_cliente = :id limit 1";
            $prepared_sql = Conection::getConection()->prepare($sql);
            $prepared_sql->bindValue(":id", $id);
            $prepared_sql->execute();
            $clienteString = $prepared_sql->fetchAll(PDO::FETCH_ASSOC);

            $array =  $clienteString[0];
            
            $cliente = new Cliente();
            $cliente->setCodigo($array["cd_cliente"]);
            $cliente->setNome($array["nm_nome"]);
            $cliente->setEndereco($array["ds_endereco"]);
            $cliente->setNumero($array['nr_numero']);
            $cliente->setTipo($array['tp_cliente']);
            $cliente->setNumeroDocumento($array['nr_documento']);
            $cliente->setCidade($array['ds_cidade']);
            $cliente->setTelefone($array['nr_telefone']."");
            $cliente->setIncricao($array['nr_inscricao'] == "" ? 0:$array['nr_inscricao']);
            $cliente->setUf($array['cd_uf']);
            

            return $cliente;
        }catch(Exception $e){
            throw new Exception($e);
        }
    }

    private function getCliente($array){

        $cliente = new Cliente();
        $cliente->setCodigo($array["cd_cliente"]);
        $cliente->setNome($array["nm_nome"]);
        $cliente->setEndereco($array["ds_endereco"]);
        $cliente->setNumero($array['nr_numero']);
        $cliente->setTipo($array['tp_cliente']);
        $cliente->setNumeroDocumento($array['nr_documento']);
        $cliente->setCidade($array['ds_cidade']);
        $cliente->setTelefone($array['nr_telefone']."");
        $cliente->setIncricao($array['nr_inscricao'] == "" ? 0:$array['nr_inscricao']);
        $cliente->setUf($array['cd_uf']);
        return $cliente;
    }
    
}

?>