<?php
session_start();
?>

<!DOCTYPE  html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<title>Registriert!</title>
	
</head>

<body>
	<div id="loginErfolgreichwrapper gamebody-background">
		<h1>Registrierung Erfolgreich!</h1>
		
		<?php 
		header( "refresh:5;url=index.php?page=login" );
		echo "<span id='loginmsg'>Hallo " . $_SESSION['username'] . "! Danke für die Registrierung!</span>"; 
		exit;
		?>
		
	</div>
	
	
	
	
	
</body>