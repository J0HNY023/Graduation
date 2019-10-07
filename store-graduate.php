<?php
	require('functions.php');
	$pdo = connectToDatabase();
	if(isset($_POST['submit'])){

		$statement = $pdo->prepare('INSERT INTO graduates ( name, degree, college) VALUES (:name, :degree, :college)');
		$statement->execute([
			'name' => $_POST['name'],
			'degree' => $_POST['degree'],
			'college' => $_POST['college']
			

		]); 
	}


header('Location:index.php');


?>