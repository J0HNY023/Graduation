<?php 

require('functions.php');
$pdo = connectToDatabase();

$statement = $pdo->prepare('SELECT * FROM graduates');
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);
// var_dump($statement);
// var_dump($result);


require('index.view.php');




 ?>