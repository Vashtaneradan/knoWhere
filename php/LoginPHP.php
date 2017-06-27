<?php
$_SESSION['errormsg'] = '';

// wenn login oder username oder passwort nicht gesetzt fehler
if (!isset($_POST['btnlogin']) || !isset($_POST['username']) || !isset($_POST['password'])) {
    $_SESSION['errormsg'] = "<div class='error' style='color:red'>Login-Daten unvollständig!</div>";
    header("location:index.php");
    exit;
}

//.json laden
$userList = json_decode(file_get_contents('userData/users.json'), true); // Daten aus Datei laden
foreach ($userList as $userName => $user) {
    // === exakt gleich (also auch datentyp!!!)
    if ($userName === $_POST['username'] && $user['password'] === $_POST['password']) {
        /*falls benutzername und passwort übereinstimmen, dann
         * username in Session schreiben, letzen Fehler
         * falls vorhanden löschen und weiterleiten
         * */
        $_SESSION['username'] = $_POST['username'];
        unset($_SESSION['errormsg']);
        unset($_SESSION['errormsgReg']);
        header("location:index.php?page=LoginErfolgreich");
        exit;
    }
}

/*Wenn Fehler auftritt, benutzername oder kennwort falsch, dann
 * fehlermeldung setzen und login.php mit neuer fehlermeldung
 * aufrufen
 * */

$_SESSION['errormsg'] = "<div class='error' style='color:red'>Login-Daten ungültig!</div>";
header("location:index.php");
exit;
