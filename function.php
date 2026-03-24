<?php
echo"<br>-----------------------Challenge 01: The Personalized Greeting (Parameters)---------";
function greetUser($name){
    echo"<br>hello $name <br>";
}
greetUser("khalid");
echo"<br>-----------------------Challenge 02: The Calculation Engine (Return Values)---------";
function calculateArea($width,$height){
   $totalArea=$width*$height;
   echo"<br>the total area is <br>: $totalArea";
}
calculateArea(5,2);
echo"<br>-----------------------Challenge 03: The Logic Gatekeeper (Boolean Return)---------";

function isAdult($age){
 if ($age>=18){
    return true;
 }else
 return false;
}
$age=16;
if(isAdult($age)){
    echo"<br>Access Granted <br>";
}else{
  echo"<br>Access Denied <br>";
}

echo"<br>-----------------------Challenge 04: The safe Multiplier (Logic Guarding)---------<br>";
   function multiplyNumbers($a, $b){
     if(is_int($a) && is_int($b)){
        return $a*$b;
     }else
       echo" Error: Invalid Input";
   }
 echo multiplyNumbers(5,"apple");


 echo"<br>------------------Challenge 05: The Text Flipper (Algorithmic Synthesis)---------<br>";
 
 function manualReverse($text){
    $revers="";
     for($i=strlen($text)-1;$i>=0;$i--){
        $revers .=$text[$i];
     }
     return $revers;
 }

     echo manualReverse("khalid");


?>