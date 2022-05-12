<?php

class BankAccount
{
    public $balance;
}

$account = new BankAccount();
var_dump($account->balance); // null





class BankAccount_two
{
    public float $balance;
}

$account = new BankAccount_two();
$account->balance = 0;

var_dump($account->balance); // 0

?>