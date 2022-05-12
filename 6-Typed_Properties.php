<?php

 
// simple without typing
class BankAccount
{
    public $balance;
}

    $account = new BankAccount();
    echo $account->balance; // null



    // typed properties



class BankAccount_two
{
    public float $balance2;
}

$account2 = new BankAccount_two();
$account2->balance = 0;

echo $account2->balance2; // 0

?>