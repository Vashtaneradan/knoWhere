<?php
$userList = loadData('userData/users.json'); // Daten aus Datei laden
$_SESSION['errormsgReg'] = '';

// wenn login oder username oder passwort nicht gesetzt fehler
if (!isset($_POST['btnregister']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['passwordrepeat'])) {
    $_SESSION['errormsgReg'] = "<div class='error'>&#x26a0; Fehler bei der Benutzereingabe!</div>";
    header("location:index.php?page=register");
    exit;
}


//prüfen ob nutzername schon vergeben
if (isset($userList[$_POST['username']])) {
    $_SESSION['errormsgReg'] = "<div class='error'>&#x26a0; Der Benutzername ist schon vergeben! Bitte einen anderen wählen!</div>";
    header("location:index.php?page=register");
    exit;
}

//passworteingaben überprüfen
if ($_POST['password'] != $_POST['passwordrepeat']) {
    //passworteingaben unterschiedlich!
    $_SESSION['errormsgReg'] = "<div class='error'>&#x26a0; Passwörter stimmen nicht überein!</div>";
    header("location:index.php?page=register");
    exit;
}

// automatischer login wenn Registrierung erfolgreich
$_SESSION['username'] = $_POST['username'];

//an den gesetzten user passwort und score setzten
$userList[$_POST['username']] = [
    //passwort hashen mit random salt um Sicherheit zu erhöhen
    'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
];

//$userList in Datei speichern
saveData('userData/users.json', $userList);
unset($_SESSION['errormsgReg']);
unset($_SESSION['errormsg']);
header("location:index.php?page=registrierungErfolgreich");



