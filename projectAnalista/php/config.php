<?php

$dsn = 'mysql:dbname=avaliacao;host=localhost';
$user = 'jnun';
$pass = '009pdf4qa';

try{
$dbd = new PDO($dsn,$user,$pass);

} catch(PDOException $e){ echo $e;}

?>