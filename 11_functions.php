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
    echo count($fruits); 
    echo "</br>";

    $my_name = "Vimal is a good boy";
    echo strlen($my_name);

    echo strtoupper($my_name);    
    echo strtolower($my_name);    
    
    $password = "sadsfdsfsdfsfdsfdjsfndsjfndsf";

    if(strlen($password) < 8) {
        echo "password is weak";
    } else {
        echo "password is very strong";
    }

    ?>
         
    </div>

</div>

    
</body>
</html>