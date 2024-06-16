<?php 
class Cookie{
  
    public $nameValue =[];
    public $timeStamp = "time()+";
    public $lifeTime = 3600*24;

    public function __construct($timeStamp, $lifeTime) {

        $this->timeStamp=$timeStamp;
        $this->lifeTime =  $lifeTime;
        
    }

    public function SetNamevalue(string  $name, string $value){

         $this->nameValue[$name] = $value;

    }
    
    public function render(){

        $array = " ";

        foreach( $this ->nameValue as $name => $value ){
            
            $array =  $name ;

        }
    

         return setcookie("{$array }","{$this->timeStamp}"." {$this->lifeTime}") ;
    }

}

$setcookie = new Cookie("time()+",3600*24);

$setcookie-> SetNamevalue("User","Flavien");
$setcookie->render();
?>

<h1><?php echo $_COOKIE["User"];?></h1>

