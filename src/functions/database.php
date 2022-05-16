<?php

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

// $mysqli = new mysqli( $hostname, $username, $password, $database );
// if ($mysqli->connect_errno) {
// 	printf("Connect failed: %s\n", $mysqli->connect_error);
// 	exit();
// }

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
	$db = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

/**
 * simply wrapper for database->prepare->execute-fetchall
 */
function prepare_and_run($db, $prepared_sql, $executed_array, $fetchmode = PDO::FETCH_ASSOC) {
	$stmt = $db->prepare($prepared_sql);
	$stmt->execute($executed_array);
	return $stmt->fetchAll($fetchmode);
}