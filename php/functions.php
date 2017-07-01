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
        "hearts" => $hearts
    ];
    saveData('userData/HighScore.json', $data);
}
