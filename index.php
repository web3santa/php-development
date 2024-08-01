<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">radius: </label>
        <input type="text" name="radius" />
        <input type="submit" value="calculate" />
    </form>
</body>
</html>
<?php
   $radius = $_POST["radius"];

    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x, $y);
    // $total = sqrt($x);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(50, 55);

    echo $total;
?>