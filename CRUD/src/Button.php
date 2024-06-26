<?php
namespace App;

use App\HTMLELement;


 class Button extends HTMLElement{

    public function __construct($content=" ") {

        parent::__construct("button",$content);
    }
 }


 

?>
