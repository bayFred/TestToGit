<?php

/*
* 1.Соединение с БД
		Если соединения нет - отработать скрипт создания БД 
		и заполнения данными.
		(Поднять файл sql и запустить скрипт)
*
**/


 

class DB{
	
		public $hn = 'localhost';
		public $db = 'stroi4';
		public $un = 'root';
		public $pw = '';
//public $pdo = new PDO($dsn, $user, $pass, $opt);
		public $conn = "";
		public $result = "";
	
public function __construct(){
		
		error_reporting(E_ALL);

		$this->conn = new mysqli($this->hn, $this->un, $this->pw, $this->db);
		$this->conn->set_charset("utf8");
		}
public function db_isset(){
	
	$query=" SELECT COUNT(*) FROM information_schema.SCHEMATA WHERE SCHEMA_NAME LIKE 'stroi4'";
	$this->conn->query($query);
}

public function getTools($param) {

    
    $query  = "SELECT tools.tool_name ";
    $query .= "FROM   jobs,svod,tools ";
    $query .= "WHERE  jobs.job_id = svod.job_id  ";
    $query .= "AND    svod.tool_id = tools.tool_id ";
    $query .= "AND    jobs.job_name_eng = '$param' ";

    return $query;
}


	
public function getAll(){
	
	$query = "SELECT * FROM jobs";
		$this->result = $this->conn->query($query);
		if (!$this->result)
			die("Сбой при доступе к базе данных: " . $this->conn->error);
}
	
public function create_DB(){

	$query="CREATE DATABASE IF NOT EXISTS mystroi2;";
	$sql = $this->conn->query($query);
		if(!$sql) die("Такая база существует");
	
	$sql = file_get_contents("mystroi.sql");
 
// Делим инструкции
$sql = preg_split('/;(?:\s)?$', $sql);
 
// Ну и поехали
foreach($sql as $query) {
    $this->conn->query($query);
}
//	$query2= file_get_contents("mystroi.sql");
//	$this->conn->multi_query($query2);
}

}