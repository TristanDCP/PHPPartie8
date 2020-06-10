<?php 
    setcookie("userName", $_POST["userName"]); 
    setcookie("userPass", $_POST["userPass"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
 

</head>
<body>

<p>Faire une page qui va récupérer
 les informations du cookie créé à l'exercice 3 
 et qui les affiche.</p>


 <p>
<?php
if (isset($_COOKIE["userName"]) && isset($_COOKIE["userPass"] )) {
   echo  $_COOKIE["userName"]. "<br>" . $_COOKIE["userPass"];
} else {

    echo  "Impossible d\'afficher les éléments";

}

?> 
</p>



</div>
</body>
</html>