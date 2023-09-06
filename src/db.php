<?php
// TODO $_ENVを使うとUndefined array keyエラーが出る原因の調査
$host = 'mysql';
$dbname = 'php-docker-db';
// $dbname = $_ENV['MYSQL_DATABASE'];
$username = 'root';
$password = 'password';
// $password = $_ENV['MYSQL_ROOT_PASSWORD'];

$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);

$stmt = $db->prepare('SELECT * FROM mytable');
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $result) {
    echo $result['id'] . '. ' . $result['name'] . PHP_EOL;
}
