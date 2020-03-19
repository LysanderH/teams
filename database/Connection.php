<?php


class Connection
{
    public static function make()
    {
        try {
            return new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/db.sqlite');
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

}