<?php require_once 'functions.php';

    $host = '127.0.0.1';
    $db   = 'stroi2';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
    
    /* Выполнение запроса с привязкой PHP-переменных tools.tool_name */
$job1 = 2;
$job2 = 'Нож малярный';
$job = 'test1';
echo translitToEng($job2).'<br>';
$job3 = 'pokleyka oboev';
echo translitToRu($job3).'<br>';
$stmt = $pdo->prepare('SELECT DISTINCT tools.tool_name FROM jobs,svod,tools 
                       WHERE jobs.job_id = svod.job_id 
                       AND svod.tool_id = tools.tool_id 
                       AND jobs.job_name = ?
                       ');
//$stmt->bindValue(1, $job1, PDO::PARAM_INT);
$stmt->bindValue(1, $job, PDO::PARAM_STR);
//$sth->bindValue(2, $colour, PDO::PARAM_STR);
$stmt->execute();
foreach ($stmt as $row)
{
    echo $row['tool_name'] . "  -  ";
    //echo $row['job_name'] . "<br>";
}

