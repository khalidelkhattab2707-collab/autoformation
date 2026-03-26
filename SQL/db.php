<?php
$servername="localhost";
$username="root";
$password="";
$dbname="library";
 try {
   $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "connected successfully"."<br>";
 }
 catch(PDOException $e){

echo "error :". $e->getMessage();

 }

?>