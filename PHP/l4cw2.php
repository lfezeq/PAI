<?php
    $placek = "placek po wegiersku";
    $price = 15.90;
    $pierogi = "pierogi zbojnickie";
    $price2 = 12.90;
    $liczba1 = 2;
    $liczba2 = 1;
    $koszt = ($price * $liczba1) + ($price2 * $liczba2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <table border="1">
    <tr>
        <th>Nazwa</th>
        <th>Liczba</th>
        <th>Cena</th>
    </tr>
    <tr>
        <td><?php echo $placek ?></td>
        <td><?php echo $liczba1 ?></td>
        <td><?php echo number_format($price, 2, ',', '.'); 
?></td>
    </tr>
    <tr>
        <td><?php echo $pierogi ?></td>
        <td><?php echo $liczba2 ?></td>
        <td><?php echo number_format($price2, 2, ',', '.'); 
?></td>
    </tr>
    <tr>
        <td>do zapłaty</td>
        <td>-</td>
        <td><?php echo number_format($koszt, 2, ',', '.'); 
?></td>
    </tr>
</table>
</body>
</html>

