<?php

class Division{

    public function Divide($a,$b){

        if($b==0){
       echo "cette division est impossible";
        }
        else{
          return  $a/$b;
        }

    } 
}

$division = new Division();

echo $division->Divide(4,4);