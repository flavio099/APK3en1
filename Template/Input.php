<?php 
require_once("HTMLElement.php");

class Input extends HTMLElement {


    public function __construct(string $tag ,string $attribut ,string $name ,string $contnu) {
        $this->tag = $tag;
        $this->attribut = $attribut;
        $this->name = $name;
        $this->contnu = $contnu;
    }
     private function tag($valeur){
        
         return "<{  $this->tag}>{ $valeur}</{  $this->tag}>";
     }
    function input(string $tag ,string $attribut ,string $name ,string $contnu){

        return tag('<>');

    }
    

}



?>