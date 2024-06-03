<?php
function calculate($nbr1, $operation, $nbr2){
    if ($operation == '+') {
        return $nbr1 + $nbr2;
    } elseif ($operation == '-') {
        return $nbr1 - $nbr2;
    } elseif ($operation == '/') {
        if ($nbr2 != 0) {
            return $nbr1 / $nbr2;
        } else {
            return "Erreur,cette opération est impossible";
        }
    } elseif ($operation == '*') {
        return $nbr1 * $nbr2;
    } else {
        return "Opération non valide";
    }
}

$resultat = "";



    $nbr1 = isset($_POST['nbr1']) ? $_POST['nbr1'] : 0;
    $nbr2 = isset($_POST['nbr2']) ? $_POST['nbr2'] : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 0;
    $resultat = calculate($nbr1, $operation, $nbr2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecalculate.css">
    <title>calcul</title>
</head>
<body>
    <h1 class='titre'>Le calcul d'un nombre</h1>
    <hr>
    <div>
        <form action="" method="post">
            <div>
                <label for="nombre1">Nombre 1</label>
                <input step="0,2" type="number" name="nbr1" id="nbr1" placeholder="Insérez votre premier nombre" required>
            </div>
            <div>
                <label for="operation">Choisissez une opération</label>
                <select name="operation" id="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
            </div>
            <div>
                <label for="nombre2">Nombre 2</label>
                <input type="number" name="nbr2" id="nbr2" placeholder="Insérez votre deuxième nombre" required>
            </div>

            <button type="submit">Calculer</button>
        </form>
        <hr>
        <p>Votre réponse est : <?php echo $resultat; ?></p>
    </div>
</body>
</html>
