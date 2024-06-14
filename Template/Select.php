<?php 
require_once("HTMLElement.php");

class Select extends HTMLElement{

    protected $children = [];
    protected array $attribut = [];

    public function __construct($content){

        parent::__construct("select",$content);
    }

    public function addChild(HTMLElement $child) {
        $this->children[] = $child;
    }

    public function render() {
        $attrs = "";
        foreach ($this->attribut as $name => $value) {
            $attrs .= " $name=\"$value\"";
        }

        $html = "<{$this->tagName}{$attrs}>";
        foreach ($this->children as $child) {
            $html .= $child->render();
        }
        $html .= "</{$this->tagName}>";

        return $html;
    }


}

$select = new Select("");
$select ->setAttribut("name","select");
$select ->setAttribut("class","select");

$option1 = new HTMLElement("option","Democratic Republic of Congo");
$option1->setAttribut("value","Democratic Republic of Congo");

$option2 = new HTMLElement("option","Republic of Zambia");
$option2->setAttribut("value","Republic of Zambia");


$option3 = new HTMLElement("option","Republic of Namibia");
$option3->setAttribut("value","Republic of Namibia");

$option4 = new HTMLElement("option","Republic of South Africa");
$option4->setAttribut("value","Republic of South Africa");

$select->addChild($option1);
$select->addChild($option2);
$select->addChild($option3);
$select->addChild($option4);





?>