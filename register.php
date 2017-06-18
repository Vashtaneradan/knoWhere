<?php
session_start();
?>
<!DOCTYPE  html>
<html lang="de">

    <head>
	    <meta charset="UTF-8">
	    <title>Registrieren</title>
    </head>
    
    <body>
        <!--Formular für das registrieren -->
        <div id="registerwrapper gamebody-background">
            <h1>Register</h1>
            <form name="register" method="post" action="register-action.php" id="register">
                <label for="username">Wunsch-Benutzername:</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <label for="password">Passwort:</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Register" name="btnregister" id="btnregister">
            </form>
            <p><a href="index.php?page=login">oder zurück zum Login</a></p>
        </div>
    </body>
</html>
