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
           $student = array(
            'first_name' => 'vimal',
            'second_name' => 'vinayraj',
            'country' => 'India'
           );

           echo $student['first_name']. " " . $student['second_name'] . " from " . $student['country'];
           ?>
     </div>

</div>

    
</body>
</html>