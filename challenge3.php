<?php
$total=0;
$friends =["ali"=>30,"khalid"=>70,"samir"=>120,"salwa"=>95,"ilham"=>200];
foreach ($friends as $key => $value) {
    echo"<br>name : $key ows : $value";
}
foreach ($friends as $key => $value) 
{
    $total=$total+$value;
    if ($value>=100){
        echo"<br>friend who ows more than 100 DH are <mark> $key</mark> and value is:<mark> $value</mark>";
    }

}
echo "<br>the total ows is :" . $total;
?>