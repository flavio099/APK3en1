<?php
 require_once("HTMLElement.php");

 class Button extends HTMLElement{

    public function __construct($content=" ") {

        parent::__construct("button",$content);
    }
 }

 $button= new Button("Submit");
 $button-> setAttribut("class","btn");
 $button-> setAttribut("type","submit");

?>
