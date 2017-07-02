<?php
if (!isset($_SESSION["Continent"])) {
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
$data = loadData('Questions.json'); // Daten aus Datei laden
// itteriert über alle Kontinente + Fragen
foreach ($data as $Continent => $QuestionsOfContinent) {
    // wenn Kontinent == dem gewählten Kontinent dann alle Fragen in $Questions speichern
    if ($_SESSION["Continent"] == $Continent) {
        $Questions = $QuestionsOfContinent;
        break;
    }
}

//wenn Kontinent Fragen "noch" nicht vorhanden
if (count($Questions) == 0) {
    die("keine Fragen zum Kontinent '" . $_SESSION['Continent'] . "' gefunden!");
}

$_SESSION["questionCounter"]++;

//Continent:gewählter Kontinent questionID:... answer: von user
$questionID = $_SESSION["questionIDs"][count($_SESSION['questionIDs']) - 1];
$_SESSION["questionIDsAnswered"][] = $questionID;
$actualQuestion = $Questions[$questionID];
if ($_POST["answer"] == $actualQuestion["solution"]) {
    //Antwort = Lösung
    $thisTimeRight = true;
    $_SESSION["rightAnswer"]++;
    $_SESSION["score"] += 50;
    if ($_SESSION['rightAnswer'] % 2 == 0) {
        $_SESSION['hearts'] = $_SESSION['rightAnswer'] / 2;
    }
} else {
    $thisTimeRight = false;
}