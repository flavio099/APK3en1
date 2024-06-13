<?php 
require_once("HTMLElement.php");

class FileUpload extends HTMLElement {
 
    
    public function __construct($content=" ") {
    
        parent::__construct("input",$content);
    }
 
}

     $FileUpload= new FileUpload(" ");
     $FileUpload-> setAttribut("name","FileUpload");
     $FileUpload-> setAttribut("class","FileUpload");
     $FileUpload-> setAttribut("type","file");

?>