<?php
// public class customer
class public_Customer
{
    public $name;

    public function getName()
    {
        return $this->name;
    }
}

$customer = new public_Customer();
$customer->name = 'Bob';
echo $customer->getName(); // Bob

// private class customer
class private_Customer
{
    private $name;
    
    public function getName()
    {
        return $this->name;
    }

}

$private_customer = new private_Customer();
$private_customer->name = 'Bob';
echo $private_customer->getName(); // error
?>