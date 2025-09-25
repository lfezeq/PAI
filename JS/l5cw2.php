<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 1;
$b = 2;
$c = 1;
echo "a=$a, b=$b, c=$c <br>";
$delta = $b**2 - 4*$a*$c;
$deltasqrt = sqrt($delta);
echo "delta = $delta <br>";
if ($delta<0) {
    echo "brak pierwiastków";
}
    else if ($delta==0) {
        echo "jeden pierwiastek <br>";
    $x = -$b/(2*$a);
    echo "x=($x)";
    }
    else {
        echo "dwa pierwiastki <br>";
        $x1 = (-$b - $deltasqrt)/(2*$a);
        $x2 = (-$b + $deltasqrt)/(2*$a);
        echo "x1=$x1 <br> x2=$x2";
    }
?>
</body>
</html>
