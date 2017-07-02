<?php
if (!isset($_SESSION['errormsgReg']))
    $_SESSION['errormsgReg'] = '';
?>
<!--Formular für das registrieren -->
<div id="registerwrapper" class="form">
    <form name="register" method="post" action="index.php?page=RegisterPHP" id="register">
        <h1>Registrieren</h1>
        <div id="fehlerMeldungRegistrierung">
            <?php echo $_SESSION['errormsgReg'] ?>
        </div>
        <label for="username"></label>
        <input type="text" name="username" id="username" required autofocus placeholder="Wunsch-Benutzername">
        <label for="password"></label>
        <input type="password" name="password" id="password" required placeholder="Passwort">
        <label for="passwordrepeat"></label>
        <input type="password" name="passwordrepeat" id="passwordrepeat" required placeholder="Passwort wiederholen">
        <input type="submit" value="Registrieren" name="btnregister" id="btnregister" class="button">
        <p><a href="index.php?page=login">oder zurück zum Login</a></p>
    </form>
</div>