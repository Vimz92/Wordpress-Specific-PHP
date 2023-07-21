<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
     <h1 class="top-heading"> Up & Running with PHP</h1>

     <div class="code-content">
        <?php
    for($i = 0; $i < 20; $i++ ){
        if($i == 14){
        echo "The number is Fourteen </br>";
        continue;
        }
        echo "The number is: " . $i ."</br>";
    }

    $fruits = array('apple', 'mango', 'pomeggranate', 'lilly');
        foreach($fruits as $fruit)
        {
            echo "<pre>";
            echo $fruit;
            echo "<pre>";
;        }
 
           ?>
         
     </div>

</div>

    
</body>
</html>