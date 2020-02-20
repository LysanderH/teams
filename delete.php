<?php
$teams = file('database.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//$rawData = file_get_contents('database.txt');
//$teams = explode(PHP_EOL, $rawData);
var_dump($teams);
if (isset($_POST['teamsToDelete'])) {
    if (is_array($_POST['teamsToDelete'])) {
        $teamsToDelete = $_POST['teamsToDelete'];
        var_dump($teamsToDelete);
        var_dump($teams);
        $teams = array_diff($teams, $teamsToDelete);
        $content = implode(PHP_EOL, $teams);
        file_put_contents('database.txt', $content, LOCK_EX);
        var_dump($teams);
        return header('location: /');
    } else {
        return header('location: /');
    }
} else {
    return header('location: /');
}