<?php
?>
<!--Formular für den Login -->
<div id="loginwrapper gamebody-background">
    <h1>Login</h1>
    <form name="login" method="post" action="login-action.php" id="login">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Login" name="btnlogin" id="btnlogin">
    </form>
    <p><a href="index.php?page=register">oder registrieren</a></p>
</div>