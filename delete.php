<?php

include 'bootstrap.php';

if (isset($_POST['teamsToDelete'])) {
    if (is_array($_POST['teamsToDelete'])) {
        $teamsToDelete = $_POST['teamsToDelete'];
        var_dump($teamsToDelete);
        foreach ($teamsToDelete as $team){
            $query->delete($team);
        }
//        return header('location: /');
    } else {
        return header('location: /');
    }
} else {
    return header('location: /');
}