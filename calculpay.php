<?php

function calculpay($salaire_par_heure, $salaire_sur_le_5jours_de_la_semaine, $salaire_sur_le_6premieres_heures_du_overtime, $salaire_weekend, $salaire_dimanche_jourférié, $nbre_heures)
{
    $salaireNormal = $salaire_par_heure * $salaire_sur_le_5jours_de_la_semaine;

    if ($salaire_sur_le_6premieres_heures_du_overtime > 0 && $salaire_sur_le_6premieres_heures_du_overtime < 6) {
        $salaire_sur_le_6premieres_heures_du_overtime = ($salaire_par_heure * 1.3) * $nbre_heures;
    }
    $salaire_weekend = $salaire_par_heure * 1.5 * $nbre_heures;
    $salaire_dimanche_jourférié = $salaire_par_heure * 2 * $nbre_heures;
    $resultat = $salaireNormal + $salaire_sur_le_6premieres_heures_du_overtime + $salaire_weekend + $salaire_dimanche_jourférié;
    return $resultat;
}

$salaire_par_heure = isset($_GET['salaire_par_heure']) ? $_GET['salaire_par_heure'] : 0;
$salaire_sur_le_5jours_de_la_semaine = isset($_GET['salaire_sur_le_5jours_de_la_semaine']) ? $_GET['salaire_sur_le_5jours_de_la_semaine'] : 0;
$salaire_sur_le_6premieres_heures_du_overtime = isset($_GET['salaire_sur_le_6premieres_heures_du_overtime']) ? $_GET['salaire_sur_le_6premieres_heures_du_overtime'] : 0;
$salaire_weekend = isset($_GET['salaire_weekend']) ? (float)$_GET['salaire_weekend'] : 0;
$salaire_dimanche_jourférié = isset($_GET['salaire_dimanche_jour_férié']) ? $_GET['salaire_dimanche_jour_férié'] : 0;
$nbre_heures = isset($_GET['nbre_heures']) ? $_GET['nbre_heures'] : 0;

$solution = calculpay($salaire_par_heure, $salaire_sur_le_5jours_de_la_semaine, $salaire_sur_le_6premieres_heures_du_overtime, $salaire_weekend, $salaire_dimanche_jourférié, $nbre_heures);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy-pay</title>
    <link rel="stylesheet" href="stylecalculpay.css">
</head>

<body>
    <form class=" formulaire" action="" method="get">
        <div class="formulaire_input">
            <label class="label" for=""> Salaire Horaire : </label>
            <input class="input" type="number" name="salaire_par_heure" id="salaire_par_heure" required>
        </div>

        <div class="formulaire_input">
            <label  class="label" for=""> Nbre d'heures sur 5jours:</label>
            <input class="input" type="number" name="salaire_sur_le_5jours_de_la_semaine" id="salaire_sur_le_5jours_de_la_semaine" required>
        </div>

        <div class="formulaire_input">
            <label class="label" for=""> Nbre de 6 premières Heures du Overtime :</label>
            <input class="input" type="number"  name="salaire_sur_le_6premieres_heures_du_overtime" id="salaire_sur_le_6premieres_heures_du_overtime" required>
        </div>

        <div class="formulaire_input">
            <label class="label" for=""> Nbre des heures prestées le  weekend :</label>
            <input class="input" type="number" name="salaire_weekend"  id="salaire_weekend" required>
        </div>

        <div class="formulaire_input">
            <label class="label" for=""> Nbre des heures prestées le dimanche et les jours fériés :</label>
            <input class="input" type="number" name="salaire_dimanche_jour_férié"  id="salaire_dimanche_jour_férié" required>
        </div>
        <?php if(isset($solution) && $solution > 0): ?>
            <span class="span">Votre salaire est de : <?= $solution ?> $</span>
        <?php else: ?>
            <span class="span">Erreur de calcul</span>
       <?php endif; ?>
   
        <button  type="submit" class="btn" >Resultat</button>
    </form>
</div>

</body>
</html>
