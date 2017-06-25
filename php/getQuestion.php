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
if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}
if (!isset($_SESSION["questionIDs"])) {
    $_SESSION["questionIDs"] = [];
}
if (!isset($_SESSION["questionCounter"])) {
    $_SESSION["questionCounter"] = 0;
} else {
    if ($_SESSION["questionCounter"] >= 6) {
        die('Glückwunsch das Quiz hast du geschafft :)');
    }
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
if (count($Questions) == 0) {
    die("keine Fragen zum Kontinent '" . $_GET['Continent'] . "' gefunden!");
}
if (count($Questions) < 6) {
    die("nicht genügend Fragen für '" . $_GET['Continent'] . "' gefunden!");
}
if(count($_SESSION['questionIDs']) == count($Questions)){
    die("Es wurden schon alle fragen gestellt");
}
do {
// zufällige Frage holen
    $questionID = mt_rand(0, count($Questions) - 1);
} while (in_array($questionID, $_SESSION['questionIDs']));

$_SESSION['questionIDs'][] = $questionID;
$randomQuestion = $Questions[$questionID];

//zufällige Antwort für zufällige Frage
shuffle($randomQuestion["answer"]);
$randomAnswers = array_slice($randomQuestion["answer"], 0, 3);
$randomAnswers[] = $randomQuestion['solution'];
shuffle($randomAnswers);

