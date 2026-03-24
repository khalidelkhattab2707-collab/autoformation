<?php
$product=[
["name"=>"laptop","category"=>"tech"],
["name"=>"mobile","category"=>"tech"],
["name"=>"tablet","category"=>"tech"],
["name"=>"chaire","category"=>"forniture"],
["name"=>"disck","category"=>"forniture"]
];
$categpory=$_GET["category"]?? null;
$sort=$_GET["sort"]?? null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>Filter by Category</h2> 
    <a href="?category=tech">Tech</a> 
    <a href="?category=forniture">Furniture</a> 
    <a href="challenge6.php">All</a><br>
    <h2>Sort</h2> 
    <a href="?sort=asc">A → Z</a><br> 
    <a href="?sort=desc">Z → A</a> <br> 
    <?php
    
    $filtred=array_filter($product,function($p)use ($categpory){
      return $categpory==null || $p["category"]==$categpory;
    });

    if($sort=="asc"){
        usort($filtred,function($a,$b){
            return $a["name"]<=>$b["name"];
        });
    }
    if($sort=="asc"){
        usort($filtred,function($a,$b){
            return $b["name"]<=>$a["name"];
        });
    }
   
    
    foreach($filtred as $p){
        echo $p["name"]."<br>";
    }
    
    ?>
   




</body>
</html>