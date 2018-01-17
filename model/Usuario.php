<?php
class Usuario{
	private $id        = "";
	private $nome      = "";
	private $email     = "";
	private $senha     = "";

	public function getId(){return $this->id;}
	public function setId($id){ $this->id = $id;}

	public function getNome(){return $this->nome;}
	public function setNome($nome){ $this->nome = $nome;}

	public function getEmail(){return $this->email;}
	public function setEmail($email){ $this->email = $email;}

	public function getSenha(){return $this->senha;}
	public function setSenha($senha){$this->senha = $senha;}

	public function getUserFromId($idUser, $mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `listausuariosadb` WHERE 1=1 AND `id`= ".$idUser." order by 1 DESC");
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		if(count($row) > 0){
			$this->setId($row[0]);
			$this->setNome($row[1]);
			$this->setEmail($row[2]);
			$this->getSenha($row[3]);
			return $this;
		}
		else{
			return null;
		}
	}

	public function getUserFromEmail($email, $mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `listausuariosadb` WHERE 1=1 AND `email`= ".$email." order by 1 DESC");
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		if(count($row) > 0){
			$this->setId($row[0]);
			$this->setNome($row[1]);
			$this->setEmail($row[2]);
			$this->getSenha($row[3]);
			return $this;
		}
		else{
			return null;
		}
	}

}

?>