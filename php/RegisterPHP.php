<?php
$userList = loadData('userData/users.json'); // Daten aus Datei laden
$_SESSION['errormsgReg'] = '';

// wenn login oder username oder passwort nicht gesetzt fehler
if (!isset($_POST['btnregister']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['passwordrepeat'])) {
    $_SESSION['errormsgReg'] = "<div class='error' style='color:red'>Fehler bei der Benutzereingabe!</div>";
    header("location:index.php?page=register");
    exit;
}


//prüfen ob nutzername schon vergeben
if (isset($userList[$_POST['username']])) {
    $_SESSION['errormsgReg'] = "<div class='error' style='color:red'>Der Benutzername ist schon vergeben! Bitte einen anderen wählen!</div>";
    header("location:index.php?page=register");
    exit;
}

//passworteingaben überprüfen
if ($_POST['password'] != $_POST['passwordrepeat']) {
    //passworteingaben unterschiedlich!
    $_SESSION['errormsgReg'] = "<div class='error' style='color:red'>Passwörter stimmen nicht überein!</div>";
    header("location:index.php?page=register");
    exit;
}

// automatischer login wenn Registrierung erfolgreich
$_SESSION['username'] = $_POST['username'];

//an den gesetzten user passwort und score setzten
$userList[$_POST['username']] = [
    'password' => $_POST['password'],
    'bestScore' => 0
];

//$userList in Datei speichern
saveData('userData/users.json', $userList);
unset($_SESSION['errormsgReg']);
unset($_SESSION['errormsg']);
header("location:index.php?page=registrierungErfolgreich");



