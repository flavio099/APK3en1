<?php

interface renderable{
    public function render();
}

class Page implements renderable{
    public function render() {
        echo "Bienvenue chez itot Africa";
    }

}

$home= new page();
 echo $home-> render();