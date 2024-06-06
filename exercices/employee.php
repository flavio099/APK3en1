<?php
require_once("person.php");

class Employee extends Person {
 
    public string $jobTitle;
    
    public function __construct($jobTitle) {
    
        $this->jobTitle= $jobTitle;
    
    }
  
    public function getjobTitle() {
        return $this->jobTitle;
    }
}

$jonathan = new Employee("Manager");
echo " ";
echo $jonathan->jobTitle;  
    

  
     
