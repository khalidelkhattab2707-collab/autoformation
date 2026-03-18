
 <?php
    $name="";
    $email="";
    $message=""; 
    $error="";
    $success=""; 

  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST['name']?? "";
    $email=$_POST['email']?? "";
    $message=$_POST['message']??"";

    if(strpos($email,'@')===false){
        $error="l'adress email doit contien @";
    }
    else{
          $success="votre message a etai envoyer avec sucess";
        $name = "";
        $email = "";
        $message = "";
    }

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
      <?php if($error):?>
      <p><?php echo $error; ?></p>
      <?php endif; ?>
      <?php if($success):?>
      <p><?php echo $success; ?></p>
       <?php endif; ?>
    <form method="POST" action="">
    <label>Nom</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
    <label>Email</label>
    <input type="text" name="email"><br><br>
    <label>Message</label>
    <textarea name="message"><?php echo htmlspecialchars($message); ?></textarea><br><br>
    <button type="submit">Envoyer</button>
    </form>

</body>
</html>