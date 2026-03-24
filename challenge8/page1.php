<?php

session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
   $_SESSION["username"]=$_POST["username"];
   header("location:page2.php");
   exit();
}

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
    <label >ENTRER LE USERNAME :</label><br><br>
    <input type="text" name="username" require><br><br>
    <button type="submit">ENVOYER</button>
   </form> 

</body>
</html>