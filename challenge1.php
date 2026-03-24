<?php
$bill_tae=20;
$user="student";
$somme=6;
if($somme>5){
    $bill_tae=$bill_tae-1;
}
$total=$bill_tae*$somme;
if($user=="student"){
    $total=$total-($total*20)/100;
}
echo $total;
?>