<?php 

function connectToDatabase(){

	try{
 
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=graduation','root','root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

		}catch(PDOException $e)
			{
			echo $e->getMessage();
			}

return $pdo;
}

 ?>