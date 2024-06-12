<?php

   class Form{

    public string $tagName;
    public string $content="";
    public array $attribut=  [];
    
    public function __construct($tagName,$content="") {
         
     $this->tagName=$tagName;
     $this->content=$content;

    }

    public function setAttribut($name,$valeur) {
        $this->attribut[$name]=$valeur;
    }

    public function getAttribut($name){

        return isset($this->attribute[$name]) ? $this->attribute[$name] : null;
    }

    public function render() {

        $attrs = "";
        foreach ($this->attribut as $name => $value) {
            $attrs .= " $name=\"$value\"";
        }

    return "<{$this->tagName}{$attrs}>{$this->content}</{$this->tagName}>";

    }

    }

    $form = new Form("form","hghh");
    $form->setAttribut("method","post");
 





?>