<?php
class Usuario{
    private $login;
    private $password;
    private $name;
    private $email;
    private $dt_access;
    private $bo_deleted;
    

	/**
	 * @return mixed
	 */
	function getBo_deleted() {
		return $this->bo_deleted;
	}
	
	/**
	 * @param mixed $bo_deleted 
	 * @return Usuario
	 */
	function setBo_deleted($bo_deleted): self {
		$this->bo_deleted = $bo_deleted;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getDt_access() {
		return $this->dt_access;
	}
	
	/**
	 * @param mixed $dt_access 
	 * @return Usuario
	 */
	function setDt_access($dt_access): self {
		$this->dt_access = $dt_access;
		return $this;
	}

    /**
	 * @return mixed
	 */
	function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $dt_access 
	 * @return Usuario
	 */
	function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

    /**
	 * @return mixed
	 */
	function getName() {
		return $this->email;
	}
	
	/**
	 * @param mixed $dt_access 
	 * @return Usuario
	 */
	function setName($email): self {
		$this->email = $email;
		return $this;
	}

    /**
	 * @return mixed
	 */
	function getPassword() {
		return $this->password;
	}
	
	/**
	 * @param mixed $dt_access 
	 * @return Usuario
	 */
	function setPassword($password): self {
		$this->password = $password;
		return $this;
	}

    /**
	 * @return mixedlogin
	 */
	function getLogin() {
		return $this->password;
	}
	
	/**
	 * @param mixed $dt_access 
	 * @return Usuario
	 */
	function setLogin($login): self {
		$this->login = $login;
		return $this;
	}
}
?>