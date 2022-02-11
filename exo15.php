<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Mystère</title>
</head>
<body>

<?php
session_start();

if(empty($_SESSION['reponse'])){
    $_SESSION['reponse'] = rand(0,1000);
}

$nbAdeviner =  $_SESSION['reponse'];

if(isset($_POST['reponse'])){
    $reponse = $_POST['reponse'];
    if($reponse==$nbAdeviner){
        echo "Bonne réponse !";
    }
    elseif($reponse<$nbAdeviner){
        echo "Trop petit !";
    }
    elseif($reponse>$nbAdeviner){
        echo "Trop grand !";
    }
    else{
        echo "Merci de saisir un chiffre !";
    }
}
?>

    <p>Devine un nombre entre 0 et 1000</p>
    <form method="post">
        <input type="text" name="reponse" action="">
        <input type="submit">
    </form> 
</body>
</html>