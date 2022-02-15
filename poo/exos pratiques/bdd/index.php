<?php

try {
$connection = new PDO('mysql:host=localhost;dbname=mysql;charset=utf8',
    username: 'root', password: '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
    var_dump($e);

} catch (Exception $e) {
    echo 'Erreur inconnue';
}

$prep = $connection->prepare( query: 'select * from db' );
$prep->execute();
var_dump($prep->fetch());

