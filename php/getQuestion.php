<?php
if (!isset($_GET["Continent"])) {
    die("Kontinent nicht gesetzt");
}
//Variabeln setzten
if (!isset($_SESSION["hearts"])) {
    $_SESSION["hearts"] = 0;
}
if (!isset($_SESSION["rightAnswer"])) {
    $_SESSION["rightAnswer"] = 0;
}
if (!isset($_SESSION["questionCounter"])) {
    $_SESSION["questionCounter"] = 0;
}

$Questions = [];
$data = json_decode(file_get_contents('Questions.json'), true); // Daten aus Datei laden
// itteriert über alle Kontinente + Fragen
foreach ($data as $Continent => $QuestionsOfContinent) {
    // wenn Kontinent == dem gewählten Kontinent dann alle Fragen in $Questions speichern
    if ($_GET["Continent"] == $Continent) {
        $Questions = $QuestionsOfContinent;
        break;
    }
}

//wenn Kontinent Fragen "noch" nicht vorhanden
if (count($Questions)== 0) {
    die("keine Fragen zum Kontinent '" . $_GET['Continent'] . "' gefunden!");
}