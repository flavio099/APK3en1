<?php 
require_once("HTMLElement.php");

class Select extends HTMLElement{
    public $children=[];
    public function __construct($content){

        parent::__construct("select",$content);
    }

}

$select = new Select(" ");
$select ->setAttribut("name","select");


?>