<?php
  require_once("HTMLElement.php");

  class Checkbox extends HTMLElement{
    
    public function __construct($content){

        parent::__construct("input",$content);
    }


  }

  $checkbox= new Checkbox("");
  $checkbox->setAttribut("type","checkbox");
  $checkbox->setAttribut("name","checkbox");
  $checkbox->setAttribut("value","je suis abonné à la newletter");



?>