<?php
	require('functions.php');
	$pdo = connectToDatabase();

	$statement = $pdo->prepare('UPDATE graduates SET name = :name, degree = :degree, college = :college WHERE id_number = :id');
	$statement->execute([
		'name' => $_POST['name'],
		'degree' => $_POST['degree'],
		'college' => $_POST['college'],
		 
		'id' => $_POST['id_number']
	]);


	header('Location: index.php');

?>
