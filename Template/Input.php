<?php 
require_once("HTMLElement.php");

class Input extends HTMLElement {
 
    
    public function __construct($content=" ") {
    
        parent::__construct("input",$content);
    }
 
}

     $inputName = new Input(" ");
     $inputName-> setAttribut("name","name");
     $inputName-> setAttribut("placeholder","Nom");
     $inputName-> setAttribut("class","input");
     $inputName-> setAttribut("type","text");

     $inputEmail = new Input(" ");
     $inputEmail-> setAttribut("name","email");
     $inputEmail-> setAttribut("placeholder","Email");
     $inputEmail-> setAttribut("class","input");
     $inputEmail-> setAttribut("type","email");

     $inputPassword= new Input(" ");
     $inputPassword-> setAttribut("name","password");
     $inputPassword-> setAttribut("placeholder","Password");
     $inputPassword-> setAttribut("class","input");
     $inputPassword-> setAttribut("type","password");

?>

