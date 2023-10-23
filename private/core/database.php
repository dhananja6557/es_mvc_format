<?php

/**
 * Database Connection
 */
class Database
{
	
	private $db_host = "localhost";
	private $db_name = "school_db";
	private $db_user = "root";
	private $db_pass = "test@123";
	private $db;

	public function connect()
	{
		$this->db = null;

		try {
			// $this->db = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
			$this->db = new mysqli
			(
				$this->db_host, 
				$this->db_user, 
				$this->db_pass, 
				$this->db_name
			);

			return $this->db;

		} catch (Exception $e) {
			echo 'Connection Error: ' . $e->getMessage();
		}
	}
}

// $db = new Database();

// $conn = $db->connect();

// $query = "SELECT * FROM users";

// $datas = $conn->query($query);

// while ($data = $datas->fetch_assoc())
// {
// 	echo $data['firstname'] . ' ' . $data['lastname'] . "<br>";
// }