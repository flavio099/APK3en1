<?php 

require_once("HTMLElement.php");

class Label extends HTMLElement{

    public function __construct($content){

        parent::__construct("label",$content);

    }

}

$labelGender = new Label("Quel est votre genre ?");
$labelNewsletter = new Label("Cochez la case ci-dessous pour vous abonnez à notre news letter");


?>