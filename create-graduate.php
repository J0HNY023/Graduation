<?php 

require('functions.php');



$pdo = connectToDatabase();
	$degree = $pdo->prepare('SELECT * FROM degree');
	$degree->execute();
	$result = $degree->fetchAll(PDO::FETCH_OBJ);







require('create-graduate.view.php');

 ?>