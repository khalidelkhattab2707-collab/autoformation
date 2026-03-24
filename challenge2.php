<?php
$age=11;
$price=0;
if ($age<12){
    $price=20;
      echo"the price is $price DH <br>";
      echo"Special menu children included";
       }
 else if($age>=12 && $age<=18){
    $price=40;
      echo"the price $price 40 DH";
       }
   
  else if($age>60){
    $price=30;
       echo"senior discount  the price is $price DH";
       }
  
else{
       $price=60;
       echo"the price is $price DH";
}
     
?>