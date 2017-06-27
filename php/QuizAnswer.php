<?php
if (!isset($_POST["Continent"])) {
    die("Kontinent nicht gesetzt");
}
//Variabeln setzten
if (!isset($_SESSION["hearts"])) {
    die();
}
if (!isset($_SESSION["rightAnswer"])) {
    die();
}
if (!isset($_SESSION["score"])) {
    die();
}
if (!isset($_SESSION["questionCounter"])) {
    die();
}

$Questions = [];
$data = json_decode(file_get_contents('Questions.json'), true); // Daten aus Datei laden
// itteriert über alle Kontinente + Fragen
foreach ($data as $Continent => $QuestionsOfContinent) {
    // wenn Kontinent == dem gewählten Kontinent dann alle Fragen in $Questions speichern
    if ($_POST["Continent"] == $Continent) {
        $Questions = $QuestionsOfContinent;
        break;
    }
}

//wenn Kontinent Fragen "noch" nicht vorhanden
if (count($Questions) == 0) {
    die("keine Fragen zum Kontinent '" . $_POST['Continent'] . "' gefunden!");
}

$_SESSION["questionCounter"]++;

//Continent:gewählter Kontinent questionID:... answer: von user
$actualQuestion = $Questions[$_POST["questionID"]];
if ($_POST["answer"] == $actualQuestion["solution"]) {
    //Antwort = Lösung
    $thisTimeRight = true;
    $_SESSION["rightAnswer"]++;
    $_SESSION["score"]+=50;
    if ($_SESSION['rightAnswer'] % 2 == 0) {
        $_SESSION['hearts'] = $_SESSION['rightAnswer'] / 2;
    }
} else {
    $thisTimeRight = false;
}