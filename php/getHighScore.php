<?php
$scoreList = json_decode(file_get_contents('userData/HighScore.json'), true); // Daten aus Datei laden

usort($scoreList, function ($a, $b) {

    if ($a['score'] == $b['score']) {
        if ($a['hearts'] == $b['hearts']) {
            if ($a['date'] == $b['date']) {
                return 0;
            }
            //wenn score und hearts gleich dann nach date sortieren
            return ($a['date'] < $b['date']) ? -1 : 1;
        }
        //wenn score gleich dann nach hearts sortieren
        return ($a['hearts'] > $b['hearts']) ? -1 : 1;
    }
    //nach score sortieren
    return ($a['score'] > $b['score']) ? -1 : 1;

});
