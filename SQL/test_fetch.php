<?php
require 'db.php';
$minprice=20;
$sql="select title,price from library_books where price >:price";
$stmt = $conn->prepare("$sql");
$stmt->execute(['price'=>$minprice]);
$books=$stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($books)>0){
    foreach($books as $book){
        echo "title :".$book['title']."  "."price :".$book['price']."<br>";
    }
}else{
  echo"no books"  ;
}

?>
