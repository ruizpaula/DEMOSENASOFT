<?php

 /**
  * 
  */
 class Database{
 	

 	private $host;
 	private $db;
 	private $user;
 	private $password;
 	private $charset;

 	public function __construct()
 	{
 		$this->host = 'localhost';
 		$this->db = 'hackathon';
 		$this->user = 'root';
 		$this->password = '';
 		$this->charset = 'utf8mb4';

 	}

 	function connect(){

 		try{
 			$connection ="mysql:host=" . $this->host . ";dbname=" . $this->db. $options =[
 				PDO::ATTR_ERRMODE  => PDO::ERROMODE_EXCEPTION,
 				PDO::ATTR_EMULATE_PREPARE => false,

 			];

 			$pdo = new PDO($connection,$this->user,$this->password, $options);

 			return $pdo;
 		}catch(PDOException $e){

 			print_r('ERROR CONNECTION'. $e->getMessage());
 		}
 	}
 }



  ?>