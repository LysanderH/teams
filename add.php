<?php
require 'bootstrap.php';

if (isset($_POST['name'])) {
    if (is_string($_POST['name']) && $_POST['name'] !== '') {
        $teamToAdd = $_POST['name'];
        $query->addTeam($teamToAdd);
        return header('location: /');
    } else {
        return header('location: /');
    }
} else {
    return header('location: /');
}


