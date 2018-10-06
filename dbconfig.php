<?php
	function dbConnection()
	{
		try{
			$username = 'root';
			$password = '';
			$connection = new PDO('mysql:host=localhost;dbname=attendance', $username, $password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connection;
		}
		catch(PDOEception $e) {
			echo $e->getMessage();
		}
	}

	
?>