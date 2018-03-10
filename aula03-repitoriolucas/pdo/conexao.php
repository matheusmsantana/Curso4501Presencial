<?php 

$dbMysql    = new PDO("mysql:host=localhost;dbname=aula04","root","63970719");

$dbPostgres = new PDO("mysql:host=localhost;dbname=aula04","root","63970719");

$dbMysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbPostgres->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


// var_dump($dbMysql);
// var_dump($dbPostgres);