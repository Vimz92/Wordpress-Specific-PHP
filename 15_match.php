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
    
    $number1 = 15;
    $number2 = 20;

    echo $number1 / $number2;

    $total =  50;

    echo "The total is:" . $total . "<br/>";

   for($i=0; $i < 25; $i++){
    if($i % 2 == 0){
        echo "The number $i is even  <br/>";
    } else  {
        echo "The number $i is odd <br/>";
    }
   }


   for($i=0; $i <= 100; $i++) {
    if($i % 5 == 0 && $i % 3 == 0){
        echo $i . "Fizz Buzz <br/>";
    } else if($i % 5 == 0){
        echo $i . "Buzz <br/>";
    } else if($i % 3 == 0) {
        echo $i . "Fizz <br/>";
    } else {
        echo $i . "<br/>";
    }
   }

    ?>
         
    </div>

</div>

     
</body>
</html>