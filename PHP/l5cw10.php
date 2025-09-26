<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $a = 13;
    for ($i = 1; $i <= $a; $i++) {
        $b = "";
        for ($j = 1; $j <= $i; $j++) {
            $b .= "*";
        }
        echo $b . "<br>"; 
    }
    ?>
</body>
</html>
