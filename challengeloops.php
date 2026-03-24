<?php
echo"<br>-----------------------Challenge 01: The Linear Counter (While Loop)---------";
$number=1;
$num=0;
while($number<=10){
    echo"<br>$number";
    $number=$number+1;
}
echo"<br>--------------------Challenge 02: Reverse Countdown-----------------------";

$number2=10;
while($number2>=1){
     echo"<br>$number2";
    $number2=$number2-1;
}   
echo"<br>--------------------Challenge 03: Even Number Detector-----------------------";
for ($i=1;$i<=20;$i++){
    if($i%2==0)
        echo "<br> $i ";
}
echo"<br>--------------------Challenge 04: Even Number Counter-----------------------";
for ($j=1;$j<=50;$j++){
       if($j%2==0){
        $num=$num+1;
       }
       echo"<br>$j";
         
}
 echo "<br> Total even numbers is: $num";

 echo"<br>--------------------Challenge 05: Star Printer-----------------------<br>";

 for ($i=1;$i<=10;$i++){
   
        echo "*";
            }


echo"<br>--------------------Challenge 06: Growing Triangle (Nested Loops)-----------------------<br>";
 
     $rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";   
}  

?>