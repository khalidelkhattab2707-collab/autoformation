<?php
session_start();
//session_destroy();

 if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=[];
 }
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $item= $_POST["item"];
  
   if (!in_array($item,$_SESSION["cart"])){
     $_SESSION["cart"][]=$item;
     echo "added" . "<br>";
        }else
        echo"already exist";

}
 
  echo(count($_SESSION['cart']));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
     <input type="text" name="item">
     <button type ="submit">ADD</button>

    </form>
    
</body>
</html>

