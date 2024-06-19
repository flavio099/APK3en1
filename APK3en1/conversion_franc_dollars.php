<?php

function conversion($typeDeConversion,$taux_un_dollar_en_franc, $montant){

  if($typeDeConversion=="dollar-franc"){
     return $resultat = $taux_un_dollar_en_franc * $montant;
  }else{
    return $resultat = $montant /$taux_un_dollar_en_franc;
  }
  
}
 
$taux_un_dollar_en_franc = isset($_POST['taux_un_dollar_en_franc']) ? $_POST["taux_un_dollar_en_franc"]:'2750';
 $montant = isset($_POST['montant']) ? $_POST["montant"]:'0';
 $typeDeConversion = $_POST["typeDeConversion"];
 
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

<h1>Convertissez en toute simplicité vos francs en dollars et vos francs en dollars.</h1>
  <hr>
   <form action="" method="post"  class ="formulaire">
    <label for="">Selectionnez le type de change que vous souhaitez effectuer :</label>
   <select name="typeDeConversion" class ="input">
    <option value="dollar-franc">Dollar-Franc</option>
    <option value="franc_dollar">franc_dollar</option>
   </select>
   <input  class ="input" type="number" name='$taux_un_dollar_en_franc' id="taux_un_dollar-en-franc"  placeholder="Insérez la valeur de 1$ en franc" value="2750" required>
   <input  class ="input"  type="number" name='montant' id="montant"  placeholder="Insérez montant en $ ou franc" required >
   <button class ="btn" type="submit">calculer</button>

   </form> 
   <hr>
   <h4>Votre montant vaut:  <?= number_format(conversion($typeDeConversion,$taux_un_dollar_en_franc,$montant),2) ?> <?php if( $typeDeConversion== "dollar-franc"):?>fc <?php else:?>$ <?php endif?></h4>
   <hr>
</body>
</html>