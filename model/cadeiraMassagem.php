<?php
class CadeiraMassagem{
	private $idCadeira = "";
	private $idDia     = "";
	private $Cadeira   = "";
	private $horarios  = "";

	public function getIdCadeira(){return $this->idCadeira;}
	public function setIdCadeira($idCadeira){ $this->idCadeira = $idCadeira;}

	public function getIdDia(){return $this->idDia;}
	public function setIdDia($idDia){ $this->idDia = $idDia;}

	public function getCadeira(){return $this->cadeira;}
	public function setCadeira($cadeira){ $this->cadeira = $cadeira;}

	public function getHorarios(){ return $this->horarios;}
	public function setHorarios($horarios){ $this->horarios = $horarios;}

	public static function getIdCadeirasFromDia($idDia, $mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `cadeiramassagem` WHERE 1=1 AND `idDia`= ".$idDia." order by 1 DESC");
			$listIdCadeiras = "";
		while($rowCadeira = mysqli_fetch_array($result, MYSQLI_NUM)){
 			 // printf ("ID: %d | idDia: %d | Cadeira: %b<br>", $rowCadeira[0], $rowCadeira[1], $rowCadeira[2]);
 			 $listIdCadeiras[] = $rowCadeira[0];
		}
		// print_r($listIdCadeiras);
		return $listIdCadeiras;
	}

	public function getCadeiraFromId($idCadeira, $mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `cadeiramassagem` WHERE 1=1 AND `id`= ".$idCadeira." order by 1 DESC");
		$rowCadeira = mysqli_fetch_array( $result, MYSQLI_NUM);
		$this->setIdCadeira($rowCadeira[0]);
		$this->setIdDia($rowCadeira[1]);
		$this->setCadeira($rowCadeira[2]);
		$horarios = new HorarioMassagem();
		$this->setHorarios($horarios->populateHorarios($this->idCadeira, $mySQL));
		return $this;
	}

	public function populateCadeiras($idMassagem, $mySQL){
		$listIdCadeiras = $this->getIdCadeirasFromDia($idMassagem, $mySQL);
		$cadeiras = "";
		foreach($listIdCadeiras as $idCadeira){
		  $cadeira = new CadeiraMassagem();
		  $cadeira->getCadeiraFromId($idCadeira, $mySQL);
		  $cadeiras[] = $cadeira;
		}
		print_r($cadeiras);
		return $cadeiras;
	}

}

?>