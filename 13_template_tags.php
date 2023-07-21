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
    function the_title(){
    echo "Title of the blog post";
    }

    function the_date(){
        echo date('Y m d');
    }

    ?>
    <h2> <?php the_title() ?> </h2>
    <h2>Published on: <?php the_date() ?> </h2>
         
    </div>

</div>

     
</body>
</html>