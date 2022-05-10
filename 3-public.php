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


?>