<?php 
	class diaMassagem{
	
	function getDiaMassagemAtivo($mySQL){
		$result = $mySQL->executeSQL("SELECT * FROM `diamassagem` WHERE 1=1 order by 1 DESC");
		// print_r($result);
		 return $result;
	}

}

?>