<div id="loginErfolgreichwrapper">
    <h1>Login Erfolgreich!</h1>

    <?php
    header("refresh:3;url=index.php?page=menue");
    echo "<div id='loginmsg'>Hallo " . $_SESSION['username'] . "!</div>";
    exit;
    ?>

</div>