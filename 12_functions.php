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
    function say_hello($name) {
        echo "Say hello . {$name} </br>";
    }
    say_hello("dog");
    say_hello("frog");
    say_hello("lion");

    function hello_world(){
        echo "Hello World";
    }

    hello_world();
    hello_world();
    hello_world();
    ?>
         
    </div>

</div>

    
</body>
</html>