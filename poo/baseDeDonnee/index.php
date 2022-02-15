<?php

$connection = new PDO('mysql:host=localhost;dbname=al_forum_online;charset=utf8',
    username: 'root', password: '');


$prep = $connection->prepare( query: 'select * from message' );
$prep->execute();
var_dump($prep->fetch());

