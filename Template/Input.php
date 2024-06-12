<?php 
require_once("HTMLElement.php");

class Input extends HTMLElement {
 
    
    public function __construct($content=" ") {
    
        parent::__construct("input",$content);
    }
 
}

     $input= new Input(" ");
     $input-> setAttribut("name","name");
     $input-> setAttribut("value","flavien");
     $input-> setAttribut("class","input");
     $input-> setAttribut("type","text");

     $input= new Input(" ");
     $input-> setAttribut("name","password");
     $input-> setAttribut("value","flavien");
     $input-> setAttribut("class","input");
     $input-> setAttribut("type","password");

?>