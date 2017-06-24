<?php
if (!isset($_SESSION['errormsgReg']))
    $_SESSION['errormsgReg'] = '';
?>
<!--Formular für das registrieren -->
<div id="registerwrapper">
    <h1>Register</h1>
    <div id="fehlerMeldungRegistrierung">
        <?php echo $_SESSION['errormsgReg'] ?>
        <form name="register" method="post" action="index.php?page=RegisterPHP" id="register">
            <label for="username">Wunsch-Benutzername:</label>
            <input type="text" name="username" id="username" required placeholder="Username">
            <label for="password">Passwort:</label>
            <input type="password" name="password" id="password" required placeholder="Password">
            <label for="passwordrepeat">Passwort wiederholen:</label>
            <input type="password" name="passwordrepeat" id="passwordrepeat" required placeholder="Password (again)">
            <input type="submit" value="Register" name="btnregister" id="btnregister">
        </form>
        <p><a href="index.php?page=login">oder zurück zum Login</a></p>
    </div>
</div>