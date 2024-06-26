<?php 
namespace App;
require 'vendor/autoload.php';

use App\input;

class form {

    protected $tagName;
    protected $attributes = [];
    protected $children = [];
    protected $selfClosing = false;

    public function __construct($tagName, $selfClosing = false) {
        $this->tagName = $tagName;
        $this->selfClosing = $selfClosing;
    }

    public function setAttribute($name, $value) {
        $this->attributes[$name] = $value;
    }


    public function addChild(HTMLElement $child) {
        $this->children[] = $child;
    }

    public function render() {
        $attrs = "";
        foreach ($this->attributes as $name => $value) {
            $attrs .= " $name=\"$value\"";
        }

        if ($this->selfClosing) {
            return "<{$this->tagName}{$attrs} />";
        }

        $html = "<{$this->tagName}{$attrs}>";
        foreach ($this->children as $child) {
            $html .= $child->render();
        }
        $html .= "</{$this->tagName}>";

        return $html;
    }




}

?>

