<?php
session_start();
if (isset( $_SESSION["username"])||isset( $_SESSION["languages"])){
    $username= $_SESSION["username"] ;
     $languages= $_SESSION["languages"];
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
    <p>
         hello : <?php echo htmlspecialchars($username)?>;<br><br>
         your favorite language : <?php echo htmlspecialchars($languages)?>;<br>
    </p>
</body>
</html>