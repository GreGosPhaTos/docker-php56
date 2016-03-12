<?php

$mysqli = new \mysqli("db", "root", "mypassword", "test", 3306);

$result = $mysqli->query("SHOW TABLES;");
var_dump($result->fetch_all());

$mysqli->close();

$pdo = new \PDO(
    'mysql:host=db;dbname=test',
    'root',
    'mypassword'
);

$query = $pdo->query("SHOW TABLES;");
$query->execute();
var_dump($query->fetchAll());

$redis = new Redis();
$redis->connect("redis");
$redis->set("key", uniqid());
print $redis->get("key");
