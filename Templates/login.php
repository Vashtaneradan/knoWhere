<?php
if (!isset($_SESSION['errormsg']))
    $_SESSION['errormsg'] = '';
?>
<!--Formular für den Login -->
<div id="loginwrapper" class="form">
    <form name="loginFormular" method="post" action="index.php?page=LoginPHP" id="login">
        <h1>Login</h1>
        <div id="fehlerMeldungLogin">
            <?php
            echo $_SESSION['errormsg'];
            ?>
        </div>
        <label for="username"></label>
        <input type="text" name="username" id="username" required autofocus placeholder="Benutzername">
        <label for="password"></label>
        <input type="password" name="password" id="password" required placeholder="Passwort">
        <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
        <p><a href="index.php?page=register">oder registrieren</a></p>
    </form>
</div>
