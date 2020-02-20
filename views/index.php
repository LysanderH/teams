<?php
$teams = file('database.txt', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
//$teams = explode(PHP_EOL, $rawData);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
    <style>
        form {
            width: 25%;
        }
        fieldset{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
<h1>Teams</h1>
<?php if (!empty($teams)): ?>
    <ul>
        <?php foreach ($teams as $key => $team): ?>
            <li><?= $team ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Pas d'items dans la base de donnée</p>
<?php endif; ?>
<form action="/add" method="post">
    <fieldset>
        <legend>Ajouter une équipe</legend>
        <label for="add">Nom de l'équipe</label>
        <input type="text" id="add" name="name">
        <input type="submit" value="ajouter l'équipe">
    </fieldset>
</form>
<?php if ($teams): ?>
    <form action="/delete" method="post">
        <fieldset>
            <legend>Supprimer une équipe</legend>
            <?php foreach ($teams as $key => $team): ?>
            <div>
                <label for="<?= $key ?>"><?= $team ?></label>
                <input type="checkbox" value="<?= $team ?>" id="<?= $key ?>" name="teamsToDelete[]">
            </div>
            <?php endforeach; ?>
            <input type="submit" value="Supprimer les équipes sélectionné">
        </fieldset>
    </form>
<?php else: ?>
    <p>Ajouter des équipes pour les supprimer</p>
<?php endif; ?>
</body>
</html>
