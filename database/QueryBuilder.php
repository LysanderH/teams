<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllTeams()
    {
        $statement = $this->pdo->prepare("SELECT * FROM teams");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function addTeam($team)
    {
        $statement = $this->pdo->prepare("INSERT INTO teams('name') VALUES('{$team}');");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM teams WHERE id={$id};");
        $statement->execute();
    }
}