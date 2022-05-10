<?php
 
class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    public function getBalance()
    {
        return $this->balance;
    }
}


$account = new BankAccount('123456789', 100);
echo $account->accountNumber; // 123456789

// u can write like this:

class BankAccount2
{
	function __construct( private $accountNumber, private $balance)
	{
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
	}

}
$account2 = new BankAccount2('123456789', 100);
echo $account2->accountNumber;

?>

