<?php
session_start();
?>
	<div id="loginErfolgreichwrapper gamebody-background">
		<h1>Login Erfolgreich!</h1>
		
		<?php 
		header( "refresh:5;url=index.php?page=menue" );
		echo "<span id='loginmsg'>Hallo " . $_SESSION['username'] . "!</span>"; 
		exit;
		?>
		
	</div>