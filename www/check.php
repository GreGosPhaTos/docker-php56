<?php

$mysqli = new \mysqli("192.168.99.100", "root", "mypassword", "mydatabase", 3306);

$result = $mysqli->query("SHOW TABLES;");
var_dump($result->fetch_all());

$mysqli->close();

$pdo = new \PDO(
    'mysql:host=192.168.99.100;dbname=mydatabase',
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


require "vendor/autoload.php";

$client = \Elasticsearch\ClientBuilder::create()
    ->setHosts(['elasticsearch'])
    ->build();
$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
    'body' => ['testField' => 'abc']
];

$response = $client->index($params);
print_r($response);
