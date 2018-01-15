<?php
//class DBLib{
	// Load configuration as an array. Use the actual location of your configuration file
	function executeSQL($inputSql){
		sysout("executeSQL " + $inputSql);
		//connect();
		$config = parse_ini_file('db.ini'); 
		$connection = mysqli_connect('localhost',$config['username'], $config['password'], $config['dbname']);
		if($connection === false) {
			echo "erro ao conectar no banco";
		}
		$result = mysqli_query($connection, $inputSql);

		mysqli_close($connection);
		//close();
		return $result;
	}



?>