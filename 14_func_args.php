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
    function shopping_amount($amount) {
    $amount = $amount * 1.10;
    return $amount;
    }
     $shopping_Cart = shopping_amount("1000");

    function bank_balance($shopping_Cart){
        $bank_balance =  5000;

        if($bank_balance < $shopping_Cart){
            echo "You don't have enough money to pay";
        } else {
            echo "The payment is submitted";
        }
    }

    bank_balance($shopping_Cart);

    ?>
         
    </div>

</div>

     
</body>
</html>