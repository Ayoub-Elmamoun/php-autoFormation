<?php

class fruit
{
    // properties
    public $name;
    public $color;

    // methods
     function set_name($name){
        $this->name = $name;
     }
        
     function get_name(){
        return $this->name;
     }
    }

    $new_fruit = new fruit();
    $new_fruit->set_name("Apple");

    echo $new_fruit->get_name();
    // Apple

    ?>