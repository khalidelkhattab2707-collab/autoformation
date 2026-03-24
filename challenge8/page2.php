<?php
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
   $_SESSION["languages"]=$_POST["languages"];
   header("location:page3.php");

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
        <label>your favorite programming langauges</label>
        <input type="text" name="languages" require><br><br>
        <button type="submit">Next</button>
    
     </form>
</body>
</html>