<?php


$rawData = file_get_contents('database.txt');
$teams = explode(PHP_EOL, $rawData);
if (isset($_POST['name'])) {
    if (is_string($_POST['name']) && $_POST['name']!=='') {
        $teamToAdd = $_POST['name'];
        array_push($teams, $teamToAdd);
        $content = implode(PHP_EOL, $teams);
        file_put_contents('database.txt', $content, LOCK_EX);
        return header('location: /');
    } else {
        return header('location: /');
    }
} else {
    return header('location: /');
}


