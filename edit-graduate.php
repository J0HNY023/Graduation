<?php
	require('functions.php');
	$pdo = connectToDatabase();

	$statement = $pdo->prepare('SELECT * FROM graduates WHERE id_number = :id');
	$statement->execute([
		'id' => $_GET['id']
	]);
	$graduate = $statement->fetch(PDO::FETCH_OBJ);

	require('edit-graduate.view.php');
?>
