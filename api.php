<?php

$host = '127.0.0.1';
$db   = 'vuequiz';
$user = 'admin';
$pass = 'admin';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$action = '';
$out = array('error' => false);


if(isset($_GET['action'])){
	$action = $_GET['action'];
	//var_dump($action);
}

if($action == 'read')
{
	$users = array();

	$stm = $pdo->query('SELECT question, answer, option1, option2, option3, answer_id FROM questions JOIN options ON questions.id=options.question_id');  

	$users = $stm->fetchAll(PDO::FETCH_ASSOC);


	$out['quotes'] = $users;
}

header("Content-type: application/json");
echo json_encode($out);
$pdo = null;
die();

?>