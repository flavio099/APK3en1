<?php

 final class BankAccount {
    private float $balance= 100;
    private string $accountNumber;

    public function deposit($balance ,int $amount){
      return $balance + $amount;
    }

    public function withdraw($balance, int $amount) {
      $balance= 100;
      if($balance <$amount ){
        echo "insuffisance balance";
      }
      else{
        return $balance - $amount;
      }

    }   
}

$provi= new BankAccount();
echo $provi-> withdraw(100,50);