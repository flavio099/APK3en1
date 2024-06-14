<?php 
require_once("HTMLElement.php");

class Input extends HTMLElement {
 
    
    public function __construct($content=" ") {
    
        parent::__construct("input",$content);
    }
 
}

     $inputName = new Input(" ");
     $inputName-> setAttribut("class","inputName");
     $inputName-> setAttribut("name","name");
     $inputName-> setAttribut("placeholder","Nom");
     $inputName-> setAttribut("required","required");
     $inputName-> setAttribut("type","text");

     $inputEmail = new Input(" ");
     $inputEmail-> setAttribut("class","inputEmail");
     $inputEmail-> setAttribut("name","email");
     $inputEmail-> setAttribut("placeholder","Email");
     $inputEmail-> setAttribut("required","required");
     $inputEmail-> setAttribut("type","email");

     $inputPassword= new Input(" ");
     $inputPassword-> setAttribut("class","inputPassword");
     $inputPassword-> setAttribut("name","password");
     $inputPassword-> setAttribut("placeholder","Password");
     $inputPassword-> setAttribut("required","required");
     $inputPassword-> setAttribut("type","password");

?>

