<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <label for="">quantity: </label><br>
    <input type="text" name="quantity" /><br>
    <input type="submit" value="totals" />
    </form>

</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];

    $total= null;

    $total = $quantity * $price;
    echo "You have ordered {$quantity} * {$item}/s <br>";
    echo "Your total is \${$total}";
?>
