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
            'third_name' => 'dhanusha',
            'fourth_name' => 'gangadharan',
            'age' => 30,
            'user_logged_in' => true
           );
        
          echo "<pre>";
          print_r($student);
          var_dump($student);
          echo "<pre>";

           ?>
     </div>

</div>

    
</body>
</html>