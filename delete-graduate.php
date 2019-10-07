<?php
	require('functions.php');
	$pdo = connectToDatabase();

	$statement = $pdo->prepare('DELETE FROM graduates WHERE id_number = :id_number');
	$statement->execute([
		'id_number' => $_GET['id']
	]);

	 
     
$statement = $pdo->prepare('UPDATE graduates SET id_number=:id_number WHERE id_number = :id');
	$statement->execute([
		'id_number' => $decrement,
		 
		 
		'id' => $_POST['id_number']
	]);
	header('Location: index.php');
?>
<!-- ALTER TABLE `graduation`.`graduates`  -->
<!-- CHANGE COLUMN `id_number` `id_number` INT(2) NOT NULL ; -->
