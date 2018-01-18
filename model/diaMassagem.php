<?php 
class DiaMassagem{

	private $idMassagem  = ""; //int autmotico
	private $diaMassagem = ""; //datetime manual
	private $blAtivo     = ""; // Bool
	private $cadeiras    = ""; // eh array de objetos Cadeira

	public function getDiaMassagem (){ return $this->diaMassagem; } 
	public function setDiaMassagem($dia){ $this->diaMassagem = $dia; }

	public function getIdMassagem(){ return $this->idMassagem; }
	public function setIdMassagem($id){ $this->idMassagem = $id; }

	public function getBlAtivo(){ return $this->blAtivo; }
	public function setBlAtivo($blAtivo){ $this->blAtivo = ($blAtivo); }

	public function getCadeiras(){ return $this->cadeiras;}
	public function setCadeiras($cadeiras){ $this->cadeiras = $cadeiras;}

	public function getDiaMassagemAtivo($mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `diamassagem` WHERE 1=1 AND `boolAtivo` = 1 order by 1 DESC");
		$rowDia = mysqli_fetch_array( $result, MYSQLI_NUM);
		$this->setIdMassagem($rowDia[0]);
		$this->setDiaMassagem($rowDia[1]);
		$this->setBlAtivo($rowDia[2]);
  		
  		$cadeiras = new CadeiraMassagem();
		$this->cadeiras = $cadeiras->populateCadeiras($this->idMassagem, $mySQL);
		return $this;
	}


	
}

?>