<?php
	
	function getConfig(){
		$data = array('host' => 'localhost', 'dbname' => 'student', 'username' => 'root', 'password' => '');

		return $data;
	}

	function getConnection(){
		$conn = null;
		try {
			$config = getConfig();
			$conn = new PDO("mysql:host=". $config['host'] . ";dbname=" . $config['dbname'], $config['username'], $config['password']);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo $e->getMessage();
		}	

		return $conn;
	}
?>