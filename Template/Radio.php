<?php 

require_once("HTMLElement.php");

class Radio extends HTMLElement{

    public function __construct($content){

        parent::__construct("input",$content);

    }



}

$radioMale = new Radio("");
$radioMale->setAttribut("type","radio");
$radioMale ->setAttribut("name","gender");
$radioMale ->setAttribut("checked","checked");
$radioMale->setAttribut("value","male");


$radioFemale = new Radio("");
$radioFemale ->setAttribut("type","radio");
$radioFemale ->setAttribut("name","gender");
$radioFemale->setAttribut("value","female");



?>