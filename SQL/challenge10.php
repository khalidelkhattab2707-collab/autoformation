<?php
require 'db.php';
$sql="select * from categories";
$stmt=$conn->prepare($sql);
$stmt-> execute();
$cat=$stmt->fetchAll(PDO::FETCH_ASSOC);


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
      <label > choisir categories</label>
      <select name="categories">
           <?php foreach($cat as $c):?>
           <option value="<?php echo $c['id_categories'];?>">
             <?php echo htmlspecialchars($c['nom_categories']); ?>
           </option>

            <?php endforeach; ?>


      </select>
<button type="submit">Envoyer</button>

     </form>
</body>
</html>