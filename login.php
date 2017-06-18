<?php
//Neue Session wird gestartet, falls keine vorhanden
session_start();
/*Falls loginPHP schon ausgeführt wurde und ein Fehler beim Login auftrat, existiert errormessage
  als Variable im Session-Array. Anonsten existiert sie nicht und wird initialisiert.
*/
if(!isset($_SESSION['errormsg']))
	$_SESSION['errormsg'] = '';
?>
<!DOCTYPE  html>
<html lang="de">

    <head>
	    <meta charset="UTF-8">
	    <title>Login</title>
    </head>

    <body>    
        <!--Formular für den Login -->
        <div id="loginwrapper gamebody-background">
            <h1>Login</h1>
            <div id="fehlerMeldungLogin">
        	        <?php echo $_SESSION['errormsg'] ?>
            </div> 
            <form name="login" method="post" action="php/LoginPHP.php" id="login">
                <label for="username">Benutzername:</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <label for="password">Passwort:</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Login" name="btnlogin" id="btnlogin">
            </form>
            <p><a href="index.php?page=register">oder registrieren</a></p>
        </div>
    </body>
</html>
