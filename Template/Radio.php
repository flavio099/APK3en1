<?php 

require_once("HTMLElement.php");

class Radio extends HTMLElement{

    public function __construct($content){

        parent::__construct("input",$content);

    }



}

$radio = new Radio("");
$radio ->setAttribut("type","radio");
$radio ->setAttribut("name","gender");
$radio ->setAttribut("value","male");


$radio = new Radio("");
$radio ->setAttribut("type","radio");
$radio ->setAttribut("name","gender");
$radio ->setAttribut("value","female");



?>