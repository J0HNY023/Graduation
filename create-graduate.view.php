<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="store-graduate.php" method="POST">
	<!-- <input type="number" name="id_number" placeholder="id_number "> -->
	<input type="text" name="name" placeholder="name ">
	<!-- <input type="dropdown" name="degree" placeholder="degree "> -->
	<select name="degree" >
		<?php foreach ($result as $degree ):?>

	<option value='<?=$degree->degree_id?>' > <?=$degree->degree ?>  </option>
		<?php endforeach;?>
	</select>

	<input type="text" name="college" placeholder="college ">
	
	<input type="submit" name="submit">


</form>

</body>
</html>