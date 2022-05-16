<?php 
 // read only properties
class User
{
    public readonly string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$user = new User('joe');
var_dump($user->username); // joe
$user->username = 'bob'; // error

?>