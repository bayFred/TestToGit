<?php
error_reporting(E_ALL);

$hn = 'localhost';
$db = 'stroi4';
$un = 'root';
$pw = '';

$conn = new mysqli($hn, $un, $pw, $db);
$conn->set_charset("utf8");

function getTools($param) {
    
    $query  = "SELECT tools.tool_name ";
    $query .= "FROM   jobs,svod,tools ";
    $query .= "WHERE  jobs.job_id = svod.job_id  ";
    $query .= "AND    svod.tool_id = tools.tool_id ";
    $query .= "AND    jobs.job_name_eng = '$param' ";

    return $query;
}

function getAll(){
	$query = "SELECT * FROM jobs";
		$result = $conn->query($query);
		if (!$result)
			die("Сбой при доступе к базе данных: " . $conn->error);
}
