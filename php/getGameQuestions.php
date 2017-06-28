<?php
if (!isset($_SESSION['currContinent'])) {
    die("Kein Kontinent gewaehlt!");
}
//Variablen setzen und prüfen
if (!isset($_SESSION['gameQuestionCounter'])) 
{
    $_SESSION['gameQuestionCounter'] = 0;
}
if(!isset($_SESSION['playedContinents']))
{
	$_SESSION['playedContinents'] = [];
}
if(!isset($_SESSION['playedCountries']))
{
	$_SESSION['playedCountries'] = [];
}
if (!isset($_SESSION['score']))
{
	$_SESSION['score'] = 0;
}

if ($_SESSION['hearts'] <= 0)
{
	die('GAME OVER MAN! GAME OVER!');
}
else
{
	if ($_SESSION['gameQuestionCounter'] >= 6) 
	{
        //die('Glückwunsch das Quiz hast du geschafft :)');
		//header('Location: index.php?page=QuizTransitionGame');
		
		//aktuell gespielten Kontinent auf das
		//Array playedContinents in der Session drücken
		array_push($_SESSION['playedContinents'], $_SESSION['currContinent']);
		//Eventuell verbleibende Variablen setzen (z.b. Hearts wieder auf 0)
		
		//wieder zurueck zur WorldMap
		header('Location: index.php?page=SelectContinent');
	}
}

$gameQuestions = [];
$gameData = json_decode(file_get_contents('gameQuestions.json'), true); // Daten aus Datei laden
// itteriert über alle Kontinente + Fragen
foreach ($gameData as $Continent => $CountriesOfContinent) {
    // wenn Kontinent == dem gewählten Kontinent dann alle Fragen in $Questions speichern
    if ($_SESSION["currContinent"] == $Continent) {
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

do {
// zufällige Frage holen
    $arrayPos = mt_rand(0, count($gameQuestions) - 1);
} while (in_array($gameQuestions[$arrayPos], $_SESSION['playedCountries']));

array_push($_SESSION['playedCountries'], $gameQuestions[$arrayPos]);
$randomCountry = $gameQuestions[$arrayPos];