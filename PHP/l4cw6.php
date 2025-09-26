<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
define("currency" , 4.26);
$PLN = 100;
$EUR = 50;
$EuroAmount = number_format($PLN / currency, 2, ",",);
$PlnAmount = number_format($EUR * currency, 2, ",",);
echo ("100 zł na euro to :  $EuroAmount euro");
echo "<br>";
echo ("50 euro na zł to :  $PlnAmount złotych");
?>
</body>
</html>
