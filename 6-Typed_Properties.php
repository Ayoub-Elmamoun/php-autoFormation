<?php

class BankAccounts
{
    public $balance;
}

$account = new BankAccounts();
var_dump($account->balance); // null





class BankAccounts_two
{
    public float $balance;
}

$account = new BankAccounts_two();
$account->balance = 0;

var_dump($account->balance); // 0
