<?php 
session_start();
setcookie("user","{$_SESSION["name"]}",time()+1);

?>

<h1> Bonjour <?php echo ucwords($_COOKIE["user"]); ?> Bienvenue sur votre application </h1><br>
<hr>

<h3> Voici les informations que vous avez rensignez dans le formulaire :</h3> <br>
<ul>
    <li>Votre prenom est :  <?= "<b>". $_COOKIE["user"] ."</b>"?> </li>
    <li>Votre adresse email  est : <?= "<b>". $_SESSION["email"]  ."</b>";?></li>
    <li>Votre adresse mot de passe  est : <?= "<b>". $_SESSION["password"] ."</b>" ;?></li>
    <li>Votre fichier  est : <?= "<b>". $_SESSION["fileUpload"]  ."</b>" ;?></li>
    <li>Votre pays de residence est : <?= "<b>". $_SESSION["select"]  ."</b>";?></li>
    <li>Votre commentaire est : <?= "<b>". $_SESSION["textarea"] ."</b>" ;?></li>
    <li>Votre reponse au newsletter est : <?= "<b>". $_SESSION["checkbox"] ."</b>";?></li>
    <li>Votre genre est : <?= "<b>". $_SESSION["gender"]  ."</b>";?></li>

</ul>
<hr>



 


