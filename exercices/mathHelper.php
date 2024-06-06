<?php
class mathHelper{

    public int $a;
    public static function square($a):int{
     return $a * $a;
  }

}

$square= new mathHelper();
echo $square::square(2);