<?php

$hostname = "127.0.0.1";
$username = "root_ckp1800";
$password = "123456";
$database = "local__ckp18002022";

// $hostname = "rumahweb.net";
// $username = "ckpt6832_sicakep";
// $password = "sicakep";
// $database = "ckpt6832__ckp18002022";

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