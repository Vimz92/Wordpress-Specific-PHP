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
            $number1 = 21;
            $number2 = 22;

            if($number1 > $number2) {
                echo "number 1 is bigger";
            } else if($number1 == $number2) {
                echo "number 1 is equal";
            }  
            else {
                echo "number 2 is bigger";
            }

            echo "<hr>"; 

            if($number1 != 20) {
           echo "no, there are not eqal";
            } else {
                echo "there are equal";
            }
           echo "<hr>";
           
            $user_logged_in = true;

            if($user_logged_in) {
                echo "Welcome";
            } else {
                echo "Logout";
            }
        ?>
     </div>

</div>

    
</body>
</html>