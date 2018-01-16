<?php 
	class diaMassagem{
	
	public $diaMassagem = "";
	public $idMassagem  = "";
	public $blAtivo     = "";	
	public $cadeiras    = "";

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
		$this->setDiaMassagem($rowDia[1]);
		$this->setIdMassagem($rowDia[0]);
		$this->setBlAtivo($rowDia[2]);
  		
		return $this;
	}
	
}

?>