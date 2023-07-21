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
           $months = array("january", "february");
           foreach ($months as $month) {
            echo "<pre>";
            echo $month;
            echo "</pre>";
           }
            echo "<hr>";

           $fruits = array("apple", "mango", "banana", "melon");

           $fruits [] = "dhanusha";
           array_push($fruits, "google");
           echo "<hr>";
           foreach ($fruits as $fruit) {
            echo "<pre>";
            echo $fruit;
            echo "</pre>";
           }

           echo "<hr>";
           echo "<pre>";
           var_dump($fruits);
           echo "</pre>";

            
           ?>
     </div>

</div>

    
</body>
</html>