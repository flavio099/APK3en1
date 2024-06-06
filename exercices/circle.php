<?php 

class Circle {
 
     const PI = 3.14;
     public function areaCircle($rayon){
        return (self::PI)*($rayon*$rayon);
     }

}

$circle = new Circle();
echo $circle->areaCircle(20);