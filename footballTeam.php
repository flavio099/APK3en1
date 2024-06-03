<?php

class footBallTeam {

  public string $nameTeam ;
  public string  $nameManger;
  public string $namePresident;
  public int $sinceDate ;
  public int $effectifOfPlayer;

  public function __construct ($nameTeam,$nameManger,$namePresident, $sinceDate,$effectifOfPlayer){

    $this->nameTeam = $nameTeam;
    $this->nameManger = $nameManger;
    $this->namePresident = $namePresident;
    $this->sinceDate =$sinceDate;
    $this->effectifOfPlayer =$effectifOfPlayer;

  }


  public function getNameTeam (){
    return $this ->nameTeam;
    
  }


 }


?>