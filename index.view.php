<?php 

// $graduates = ['id_number'=>'1','name'=> 'john','degree'=>'bsit','college'=>'uc'	];
 
 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

<h3> Graduates</h3>
<a href="create-graduate.php">Add graduate</a>
<table border="solid 2px black">
<thead>
	<tr>
		<th>Id Number</th>
		<th>Name</th>
		<th>Degree</th>
		<th>College</th>
		<th>Actions</th>
 
	</tr>

</thead>	
<tbody>

<?php foreach($result as $graduate): ?> 
   <tr>
    <td><?= $graduate->id_number ?></td>
    <td><?= $graduate->name ?></td>
    <td><?= $graduate->degree ?></td>
    <td><?= $graduate->college ?></td>
    <td>
		<a href="show-graduate.php?id=<?=$graduate->id_number?>">Show</a>
		<a href="delete-graduate.php?id=<?=$graduate->id_number?>" onclick='confirmDelete(event)' >Delete</a>
	</td>
 	<!--  -->
  </tr>
<?php endforeach; ?>

</tbody>


</table>
 
 </body>
 <script>
	function confirmDelete(event) {
		var continue_delete = confirm('Are you sure?');
		console.log(continue_delete);
		if(!continue_delete) {
			event.preventDefault();
		}
	}
</script>

 </html>