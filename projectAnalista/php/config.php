<?php

$dsn = 'mysql:dbname=avaliacao;host=localhost';
$user = 'jnun';
$pass = '009pdf4qa';
$options =[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES   => false,];

try{
$dbd = new PDO($dsn,$user,$pass, $options);

} catch(PDOException $e){ echo $e;}

?>