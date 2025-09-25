<?php
$a = 5;
$b = 10;
$a2 = 5.3;
$b2 = 10.5;
$obwod = 2 * ($a + $b);
$pole = $a * $b;
$obwod2 = 2 * ($a2 + $b2);
$pole2 = $a2 * $b2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "a = $a , b = $b <br> a2 = $a2 , b2 = $b2 <br>";
    echo "<strong>obwód: " . number_format($obwod, 2) . " , pole: " . number_format($pole, 2) . "</strong><br>";
echo "<strong>obwód2: " . number_format($obwod2, 2) . "  ,  pole2: " . number_format($pole2, 2) . "</strong>";
    ?>
</body>
</html>
