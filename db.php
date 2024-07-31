	<?php
	
$user = "root";
$password = "";


try {
	$db = new PDO("mysql:host=localhost;dbname=tur_1", $user, $password);
} catch (Exception $e) {
	echo $e->getMessage();
}
	?>