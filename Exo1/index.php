<?php $Agent = $_SERVER['HTTP_USER_AGENT'] ;?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 PHP</title>
</head>
<body>

<h1>Exercice 1</h1>

<p>Faire une page HTML permettant de donner à l'utilisateur :

son User Agent
son adresse ip
le nom du serveur</p>

<?php
  echo ' <br> L adresse IP de l\'utilisateur est : '.$_SERVER['REMOTE_ADDR'];
  echo ' <br> Le navigateur de l\utilisateur est : ' . $Agent;
  echo '<br> Le nom du serveur est : ' . $_SERVER['SERVER_NAME']; 

  ?>
<?php
  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo ' <br> L adresse IP de l utilisateur est : '.getIp();
?>

</body>
</html>