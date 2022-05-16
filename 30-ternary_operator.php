<?php
// simple way of a if statement 
// istead of writing this

$x = 12;
$y = 11;

 if ($x>$y){
        $result="x isnt greater that y";
 } else {
        $result ="x is greater than y";
 }
 
// write this

$result = $x>$y ? "x isnt greatrer than y":"x is greater than y";


?>