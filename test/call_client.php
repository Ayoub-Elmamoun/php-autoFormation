<?php 

require "class_client.php";

 $new_client = new client();
 $new_client->name = "John";
 $new_client->cin = "123456789";

 
 echo $new_client->name;

?>