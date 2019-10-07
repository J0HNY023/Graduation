<html>
	<body>
		<form action="update-graduate.php" method="POST">
			<input type="hidden" name = 'id_number' value ="<?=$graduate->id_number?>">
			<input type="text" name="name" placeholder="name" value='<?=$graduate->name?>'>
			<input type="text" name="degree" placeholder="degree" value='<?=$graduate->degree?>'>
			<input type="text" name="college" placeholder="college" value='<?=$graduate->college?>'>

		
			<input type="submit" name="submit">
		</form>
	</body>
</html>
