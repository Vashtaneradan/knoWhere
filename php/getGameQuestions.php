<?php
if (!isset($_SESSION["Continent"])) {
    die("Kein Kontinent gewaehlt!");
}
//Variablen setzen und prüfen
if (!isset($_SESSION['gameQuestionCounter'])) {
    $_SESSION['gameQuestionCounter'] = 0;
}
/*
if(!isset($_SESSION['playedContinents']))
{
	$_SESSION['playedContinents'] = [];
}
*/

if (!isset($_SESSION['playedCountries'])) {
    $_SESSION['playedCountries'] = [];
}
if (!isset($_SESSION['playedCountriesAnswered'])) {
    $_SESSION['playedCountriesAnswered'] = [];
}
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if ($_SESSION['hearts'] < 0) {
    resetGame();
    header('Location: index.php?page=GameOver');
}

if ($_SESSION['gameQuestionCounter'] >= 6) {
    //aktuell gespielten Kontinent auf das
    //Array playedContinents in der Session drücken
    //array_push($_SESSION['playedContinents'], $_SESSION["Continent"]);
    //gibt Probleme bei der Variablenübertragung in JS
    //Lösung durch switch
    switch ($_SESSION["Continent"]) {
        case 'Asien':
            $_SESSION['playedAsien'] = "Yes";
            break;
        case 'Afrika':
            $_SESSION['playedAfrika'] = "Yes";
            break;
        case 'Australien_Ozeanien':
            $_SESSION['playedAustralien_Ozeanien'] = "Yes";
            break;
        case 'Europa':
            $_SESSION['playedEuropa'] = "Yes";
            break;
        case 'Suedamerika':
            $_SESSION['playedSuedamerika'] = "Yes";
            break;
        case 'Nordamerika':
            $_SESSION['playedNordamerika'] = "Yes";
            break;
    }


    //Eventuell verbleibende Variablen setzen (z.b. Hearts wieder auf 0)
    //Für jedes Herz 120 extrapunkte
    $herzbonus = $_SESSION['hearts'] * 120;

    $_SESSION['score'] += $herzbonus;


    saveScore($_SESSION['score'], $_SESSION['hearts'], $_SESSION['username'], $_SESSION["Continent"]);
    //resetGame();

    if (($_SESSION['playedAsien'] == "Yes") && ($_SESSION['playedAfrika'] == "Yes") && ($_SESSION['playedAustralien_Ozeanien'] == "Yes") && ($_SESSION['playedEuropa'] == "Yes") && ($_SESSION['playedSuedamerika'] == "Yes") && ($_SESSION['playedNordamerika'] == "Yes")) {
        die('Spiel vorbei! Alle Kontinente wurden gespielt!');
    } else {
        header('Location: index.php?page=GameTransitionContinentSelect');
    }

    //wieder zurueck zur WorldMap

}


$gameQuestions = [];
$gameData = loadData('gameQuestions.json'); // Daten aus Datei laden
// itteriert über alle Kontinente + Fragen
foreach ($gameData as $Continent => $CountriesOfContinent) {
    // wenn Kontinent == dem gewählten Kontinent dann alle Fragen in $Questions speichern
    if ($_SESSION["Continent"] == $Continent) {
        $gameQuestions = $CountriesOfContinent;
        break;
    }
}

//wenn Kontinent Fragen "noch" nicht vorhanden
if (count($gameQuestions) == 0) {
    die("Fehler, keine Länder zum abfragen da!");
}
if (count($gameQuestions) < 6) {
    die("´Nicht genug Länder da um Abfrage zu starten!");
}
if (count($_SESSION['playedCountries']) == count($gameQuestions)) {
    die("Es wurden schon alle Länder gefragt");
}
if ($_SESSION['playedCountriesAnswered'] == $_SESSION['playedCountries']) {
    do {
// zufällige Frage holen
        $arrayPos = mt_rand(0, count($gameQuestions) - 1);
    } while (in_array($arrayPos, $_SESSION['playedCountries']));

    $_SESSION['playedCountries'][] = $arrayPos;
}else{
    $arrayPos = $_SESSION['playedCountries'][count($_SESSION['playedCountries']) - 1];
}
$randomCountry = $gameQuestions[$arrayPos];
