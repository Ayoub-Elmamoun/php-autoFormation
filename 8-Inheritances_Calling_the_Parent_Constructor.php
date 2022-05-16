<?php 

class BankAccount
{
    public $balance;
    public $name ;

    public function __construct($name,$balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
}

$bank_acc = new BankAccount('ayoub', 0);
var_dump($bank_acc->balance);// 0








class BankAccount_two extends BankAccount{
    

    public function __construct($name,$balance,$email)
    {
        parent::__construct($name,$balance);
        $this->email=$email;
    }

}

$bank_acc_two = new BankAccount_two('ayoub', 0,"smail@gmail.com");
var_dump($bank_acc_two->email);//
?>