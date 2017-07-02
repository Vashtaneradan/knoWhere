<?php

function loadData($filename)
{
    return json_decode(file_get_contents($filename), true);
}

function saveData($filename, $data)
{
    file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
}

function saveScore($score, $hearts, $username, $currContinent)
{
    $data = loadData('userData/HighScore.json');
    $data[$currContinent][] = [
        "username" => $username,
        "date" => time(),
        "score" => $score,
        "hearts" => (int)$hearts
    ];
    saveData('userData/HighScore.json', $data);
}


function resetGame()
{
    $_SESSION['score'] = 0;
    $_SESSION['hearts'] = 0;
    $_SESSION["rightAnswer"] = 0;
    $_SESSION["questionIDs"] = [];
    $_SESSION["questionCounter"] = 0;
    $_SESSION['gameQuestionCounter'] = 0;
    unset($_SESSION["Continent"]);
}