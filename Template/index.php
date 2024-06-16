<?php


session_start();

require_once("Form.php");
require_once("HTMLElement.php");

$mesaage =" ";

$name = isset($_POST["name"]) ? $_POST["name"]:null;
$email = isset($_POST["email"]) ? $_POST["email"]:null;
$password = isset($_POST["password"]) ? $_POST["password"]:null;
$fileUpload = isset($_FILES["FileUpload"]["name"]) ? $_FILES["FileUpload"]["name"]:null;
$select = isset($_POST["select"]) ? $_POST["select"]:null;
$textarea =isset($_POST["textarea"]) ? $_POST["textarea"]:null;
$checkbox = isset($_POST["checkbox"]) ? $_POST["checkbox"] :null ;
$gender = isset($_POST["gender"]) ? $_POST["gender"] :null;

if( isset($_POST["submit"])){
  
    $mesaage= " votre formulaire a été soumis avec succès!" ;
    header("location:resume.php");
}

$_SESSION["name"] = $name ;
$_SESSION["email"] = $email ;
$_SESSION["password"] = $password ;
$_SESSION["fileUpload"]["name"] = $fileUpload ;
$_SESSION["select"] = $select ;
$_SESSION["textarea"] = $textarea ;
$_SESSION["checkbox"] = $checkbox ;
$_SESSION["gender"] = $gender ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de contact avancé</title>
</head>
<body>
<?php
 echo $form->render();
 ?>
 <h2><?php echo $mesaage ;?></h2>
</body>
</html>
