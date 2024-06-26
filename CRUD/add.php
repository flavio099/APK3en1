<?php 
 use App\Input;
 use App\Form;
 use App\Button;

 require 'vendor/autoload.php';

 $inputName = new Input(" ");
 $inputName-> setAttribut("class","input");
 $inputName-> setAttribut("name","name");
 $inputName-> setAttribut("placeholder","Nom");
 $inputName-> setAttribut("required","required");
 $inputName-> setAttribut("type","text");

 $inputEmail = new Input(" ");
 $inputEmail-> setAttribut("class","input");
 $inputEmail-> setAttribut("name","email");
 $inputEmail-> setAttribut("placeholder","Email");
 $inputEmail-> setAttribut("required","required");
 $inputEmail-> setAttribut("type","email");

 $inputPassword= new Input(" ");
 $inputPassword-> setAttribut("class","input");
 $inputPassword-> setAttribut("name","password");
 $inputPassword-> setAttribut("placeholder","Mot de paase");
 $inputPassword-> setAttribut("required","required");
 $inputPassword-> setAttribut("type","password");


 $button= new Button("Submit");
 $button-> setAttribut("class","btn");
 $button-> setAttribut("name","submit");
 $button-> setAttribut("type","submit");


$form = new form("form");
$form ->setAttribute("method","post");
$form ->setAttribute("class","form");
$form->addChild($inputName);
$form->addChild($inputEmail);
$form->addChild($inputPassword);
$form->addChild($button);


$name= isset($_POST["name"]) ? $_POST["name"]:null ;
$email=  isset($_POST["email"]) ? $_POST["email"]:null ;
$password = isset($_POST["password"]) ? $_POST["password"]:null ;
$submit = isset($_POST["submit"]) ? $_POST["submit"]:null;


if(isset($_POST["submit"])){

    $contactList = ["{$name} ","{$email}","{$password}" ];
 foreach( $contactList as $contact){
    echo $contact;
 } 


}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
<div class= "main-container">

<?php 
echo  $form -> render();
?>
</div>
</body>
</html>

