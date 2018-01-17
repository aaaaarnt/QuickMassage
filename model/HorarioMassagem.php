<?php
class HorarioMassagem{
	private $idHorario = "";
	private $idCadeira = "";
	private $horario   = "";
	private $usuario   = "";

	public function getIdHorario(){return $this->idHorario;}
	public function setIdHorario($idHorario){ $this->idHorario = $idHorario;}

	public function getIdCadeira(){return $this->idCadeira;}
	public function setIdCadeira($idCadeira){ $this->idCadeira = $idCadeira;}

	public function getHorario(){return $this->horario;}
	public function setHorario($horario){ $this->horario = $horario;}

	public function getUsuario(){return $this->usuario;}
	public function setUsuario($usuario){$this->usuario = $usuario;}

	public static function getIdFromHorarios($idCadeira, $mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `horariomassagem` WHERE 1=1 AND `idCadeira`= ".$idCadeira." order by 1 DESC");
		$listIdHorarios = "";
		while($rowHorarios = mysqli_fetch_array($result, MYSQLI_NUM)){
			$listIdHorarios[] = $rowHorarios[0];
		}
		return $listIdHorarios;
	}

	public function getHorarioFromId($idHorario, $mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `horarioMassagem` WHERE 1=1 AND `id`= ".$idHorario." order by 1 DESC");
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		$this->setIdHorario($row[0]);
		$this->setIdCadeira($row[1]);
		$this->setHorario($row[2]);
		$user = $row[3];
		$usuario = new Usuario();
		$this->setUsuario($usuario->getUserFromId($user, $mySQL));
		return $this;
	}

	public function populateHorarios($idCadeira, $mySQL){
		$listIdHorarios = $this->getIdFromHorarios($idCadeira, $mySQL);
		$horarios = "";
		foreach($listIdHorarios as $idHorario){
		  $horario = new HorarioMassagem();
		  $horario->getHorarioFromId($idHorario, $mySQL);
		  $horarios[] = $horario;
		}
		return $horarios;
	}

}

?>