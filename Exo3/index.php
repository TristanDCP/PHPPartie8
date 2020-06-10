<?php 
setcookie('userName', $_POST['userName']);
setcookie('userPass', $_POST['userPass']);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 PHP</title>
</head>
<body>

<h1>Exercice 3</h1>

<p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie..</p>
    

<form method="post" action = "index.php">

<label for="userName"> Login </label>
    <input type="text" name="userName" id="userName">

    <label for="userPass">MDP</label>
    <input type="password" name="userPass" id="userPass">
<input type="submit" value="Generate">
</form>

<?php 
if(isset($_COOKIE['userName']) && isset($_COOKIE[['userPass']])){
    echo  $_COOKIE['userName'] . $_COOKIE[['userPass']];
} else {
    echo 'Veuillez rentrer vos informations';
}
?>

</body>
</html>