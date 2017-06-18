<?php
session_start();
?>

<!DOCTYPE  html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<title>Angemeldet!</title>
	
</head>

<body>
	<div id="loginErfolgreichwrapper gamebody-background">
		<h1>Login Erfolgreich!</h1>
		
		<?php 
		header( "refresh:5;url=menue.php" );
		echo "<span id='loginmsg'>Hallo " . $_SESSION['username'] . "!</span>"; 
		exit;
		?>
		
	</div>
	
	
	
	
	
</body>