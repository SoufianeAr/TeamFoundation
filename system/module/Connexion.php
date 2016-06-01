<?php

	class Connexion{
		
		# la connexion fournis le service : PDO
		# PDO = Php Data Object
	    # param de la connex
		private $host = "localhost";
		private $user = "root";
		private $pwd = "";
		private $dbname = "db_teamwork_try1";
		private $db;
						
		public function __construct(){}

		public function getPDO()
			{
					try{
						$this->db = new PDO("mysql:host={$this->host};dbname=".$this->dbname,$this->user,$this->pwd);
						return $this->db;	
					   }
					   catch(Exception $e)
					   {
						 echo $e->getMessage();
					   }					
			}
						
	}

?>