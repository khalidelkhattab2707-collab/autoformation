<?php

$servername="localhost";
$username="root";
$password="";
$dbname="library";
 try {
   $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $title="harry potter";
   $author="elina england";
   $price=1003;
   $sql="INSERT INTO library_books(title,author,price)
               VALUES(:title,:author,:price)";
   
   $stmt = $conn->prepare($sql);
   $stmt->execute(['title'=>$title,'author'=>$author,'price'=>$price]);
   $lastid=$conn->lastInsertId();

   echo "added successfully"."<br>";
   echo "Success! Book added with ID:".$lastid;
 }
 catch(PDOException $e){

echo "error :". $e->getMessage();

 }






?>