<?php

function conversion($taux, $montant){

        $solution = $taux* $montant;
        return $solution;
  
}
 
 $taux = isset($_GET['taux']) ? $_GET["taux"]:'2750';
 $montant = isset($_GET['montant']) ? $_GET["montant"]:'0';
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conversion_franc_dollars.css">
    <title>Conversion francs & dollars </title>
</head>
<body>

<h1>Convertissez en toute simplicité vos francs en dollars </h1>
  <hr>
   <form action="" method="get"  class ="formulaire">

   <input  class ="input" type="number" name='taux' id="taux"  placeholder="Insérez  montant en $" value="2750" required>
   <input  class ="input"  type="number" name='montant' id="montant"  placeholder="Insérez montant en fc" required >
   <button class ="btn" type="submit">calculer</button>

   </form> 
   <hr>
   <h4>Votre argent en franc vaut:  <?= conversion($taux,$montant) ?> fc</h4>
   <hr>
</body>
</html>