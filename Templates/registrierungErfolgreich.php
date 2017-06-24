<div id="loginErfolgreichwrapper">
    <h1>Registrierung Erfolgreich!</h1>

    <?php
    header("refresh:3;url=index.php?page=login");
    echo "<span id='loginmsg'>Hallo " . $_SESSION['username'] . "! Danke für die Registrierung!</span>";
    exit;
    ?>

</div>
