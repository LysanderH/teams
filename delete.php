<?php
$teams = file('database.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (isset($_POST['teamsToDelete'])) {
    if (is_array($_POST['teamsToDelete'])) {
        $teamsToDelete = $_POST['teamsToDelete'];
        $teams = array_diff($teams, $teamsToDelete);
        $content = implode(PHP_EOL, $teams);
        file_put_contents('database.txt', $content, LOCK_EX);
        return header('location: /');
    } else {
        return header('location: /');
    }
} else {
    return header('location: /');
}