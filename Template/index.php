<?php 





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de contact avancé </title>
</head>
<body>
   <div class="mainContainer">

    <div class="titleContainer">
        <h2 class ="titleContainer_title">Formulaire de contact avancé</h2>
    </div>

    <div class="formAndListContainer">

        <div class="Formulaire">
            <div class="formulaire-title">
            <h3>Formulaire</h3>
            </div>
        <form action="" method="post" class="form">

           <div class="input_name">
                <label for="" class="label">Name</label>
                <input type="text" name="name">
           </div>

            <div class="input_email">
                <label for="" class="label">Email</label>
                <input type="text" name="email">
            </div>

           <div class="input_countries">

            <label for="" class="label">Selectionnez votre pays de residence</label>
            <select name="countries" id="">
                <option value=" Democratic republic of congo"> Democratic republic of congo</option>
                <option value=" Republic of zambia"> Republic of zambia </option>
                <option value="Republic of namibia">Republic of namibia</option>
    
            </select>
           </div>

       <div class="input_newsLetter">
            <label for="" class="label">Cliquez sur le button ci-dessous pour vous abonnez à la news letter</label>
            <input type="checkbox" name="newsLetter" id="">
       </div>
       <div  class="input_gender">
      <label class="label" for="">de quel genre etes vous ?</label>

        <div class="input_gender_Masculin">
        <span>Masculin</span>
        <input type="radio" name="Masculin" id="">
        </div>

        <div class="input_gender_Feminin">
          <span>Feminin</span>
          <input type="radio" name="Feminin" id="">
        </div>

       </div>
  
        <div  class="input_upload">
            <label for="" class="label">Téléchargez votre photo de profil</label>
            <input type="file" name="upload" id="">
        </div>

        <button class="btn" type="submit">Submit</button>
    </form>
        </div>
    </div>
   </div>
</body>
</html>