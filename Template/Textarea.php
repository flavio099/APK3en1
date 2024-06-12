<?php 

require_once("HTMLElement.php");

class Textarea extends HTMLElement{
  
    public function __construct($content=""){

        parent::__construct("textarea",$content);

    }


}

$textarea= new Textarea ("");
$textarea->setAttribut("name","textarea");
$textarea->setAttribut("class","textarea");

?>