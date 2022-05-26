<?php
/**
 * 
 */
class Conexao 
{
	
	public function conectar(){

		$host = 'localhost';
		$dbname = 'ascending';
		$username = 'root';
		$password = 'root';

		try {
			$conn = new PDO('mysql:host='.$host.';dbname='.$dbname , $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch(PDOException $e) {
			return 'erro';
			// return 'ERROR: ' . $e->getMessage();
		}
	}

	
}
?>