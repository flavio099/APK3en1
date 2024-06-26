<?php 
namespace App;

class HTMLElement{
 
    protected string $tagName;
    protected array $attribut = [];
    protected string $content =" ";

    public function __construct( $tagName,$content ){

        $this->tagName= $tagName;
        $this->content= $content;

    }

    public function setAttribut($name,$valeur){

      $this->attribut[$name]= $valeur;
 
    }
     public function getAttribut($name){

        return isset($this->attribut[$name]) ? $this->attribut[$name] : null;
     
    }

    public function render() {

        $attrs = "";
        foreach ($this->attribut as $name => $value) {
            $attrs .= " $name=\"$value\"";
        }

        return "<{$this->tagName}{$attrs}>{$this->content}</{$this->tagName}>";
    }


}

?>

