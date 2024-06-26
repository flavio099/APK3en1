<?php 

namespace App;

require 'vendor/autoload.php';
use App\HTMLElement;

class Input extends HTMLElement {
 
    
    public function __construct($content=" ") {
    
        parent::__construct("input",$content);
    }
 
}


?>

