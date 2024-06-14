<?php 
require_once("Input.php");
require_once("select.php");
require_once("Checkbox.php");
require_once("FileUpload.php");
require_once("Button.php");
require_once("Radio.php");
require_once("Textarea.php");
require_once("Label.php");


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

$form = new form("form");
$form ->setAttribute("method","post");
$form ->setAttribute("class","form");
$form->addChild($inputName);
$form->addChild($inputEmail);
$form->addChild($inputPassword);
$form->addChild($FileUpload);
$form->addChild($select);
$form->addChild($labelComentaire);
$form->addChild($textarea);
$form->addChild($labelNewsletter);
$form->addChild($checkbox);
$form->addChild($labelGender);
$form->addChild($radioMale);
$form->addChild($radioFemale);
$form->addChild($button);



?>