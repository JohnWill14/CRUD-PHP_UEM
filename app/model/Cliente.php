<?php
class Cliente{
    private $codigo;
    private $nome;
    private $endereco;
    private $numero;
    private $tipo;
    private $numeroDocumento;
    private $cidade;
    private $uf;
    private $dataCadastro;
    private $telefone;
    private $incricao;

    	/**
	 * @return mixed
	 */
	function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return Cliente
	 */
	function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

		/**
	 * @return mixed
	 */
	function getCidade() {
		return $this->cidade;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return Cliente
	 */
	function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return Cliente
	 */
	function setTelefone($telefone): self {
		$this->telefone = $telefone;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return Cliente
	 */
	function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getUf() {
		return $this->uf;
	}
	
	/**
	 * @param mixed $uf 
	 * @return Cliente
	 */
	function setUf($uf): self {
		$this->uf = $uf;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getDataCadastro() {
		return $this->dataCadastro;
	}
	
	/**
	 * @param mixed $dataCadastro 
	 * @return Cliente
	 */
	function setDataCadastro($dataCadastro): self {
		$this->dataCadastro = $dataCadastro;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getIncricao() {
		return $this->incricao;
	}
	
	/**
	 * @param mixed $incricao 
	 * @return Cliente
	 */
	function setIncricao($incricao): self {
		$this->incricao = $incricao;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getCodigo() {
		return $this->codigo;
	}
	
	/**
	 * @param mixed $codigo 
	 * @return Cliente
	 */
	function setCodigo($codigo): self {
		$this->codigo = $codigo;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 * @param mixed $endereco 
	 * @return Cliente
	 */
	function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getNumero() {
		return $this->numero;
	}
	
	/**
	 * @param mixed $numero 
	 * @return Cliente
	 */
	function setNumero($numero): self {
		$this->numero = $numero;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getNumeroDocumento() {
		return $this->numeroDocumento;
	}
	
	/**
	 * @param mixed $numeroDocumento 
	 * @return Cliente
	 */
	function setNumeroDocumento($numeroDocumento): self {
		$this->numeroDocumento = $numeroDocumento;
		return $this;
	}
}

?>