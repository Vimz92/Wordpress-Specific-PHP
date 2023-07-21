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
    $fruits = array('apple', 'mango', 'pomeggranate', 'lilly');
        
    $i = 0;

    while($i < count($fruits)) {
    echo $fruits[$i] . "<br/>";
    $i++;
    }
           ?>
         
     </div>

</div>

    
</body>
</html>