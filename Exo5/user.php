<?php 
    setcookie("userName", $_POST["userName"]); 
    setcookie("userPass", $_POST["userPass"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 </title>
 

</head>
<body>

<p>Voir index.php</p>


 <p>
<?php
if (isset($_COOKIE["userName"]) && isset($_COOKIE["userPass"] )) {
   echo  $_COOKIE["userName"]. "<br>" . $_COOKIE["userPass"];
} else {

    echo  "Impossible d\'afficher les éléments";

}

?> 
</p>

<form action="../Exo3/index.php" method="POST">
        <label for="userName">Username</label>
        <input type="text" name="userName" id="userName">
        <label for="userPass">Password</label>
        <input type="password" name="userPass" id="userPass">
        <input type="submit" name="" id="" href="../Exo3/index.php">
    </form>


</div>
</body>
</html>