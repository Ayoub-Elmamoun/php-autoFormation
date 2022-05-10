<?php

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




class private_Customer2
{
    private $name;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}

$private_customer2 = new private_Customer2();
$private_customer2->setName('Bob_marley');
echo $private_customer2->getName(); // Bob_marley 


?>