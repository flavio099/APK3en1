<?php

abstract class Animal {
    abstract public  function makeSound();
   
}

class Dog extends Animal {
 public  function makeSound() {
     echo "woof";
    } 
}

class Cat extends Animal {
    public  function makeSound() {
        echo "miaou";
       } 
   }

  $Cat= new cat();
  $Dog= new Dog();
  echo  $Cat->makeSound();
  echo "   ";
  echo  $Dog->makeSound();
