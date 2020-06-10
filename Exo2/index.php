<?php
session_start();

$_SESSION["lastname"]= 'Da Costa Pinto';
$_SESSION["firstname"]='Tristan';
$_SESSION["age"]= 26;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 PHP</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

<a href="user.php">Allo</a>

</body>
</html>