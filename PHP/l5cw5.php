
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
    <?php
    $placek = "placek po wegiersku";
    $price = 15.90;
    $pierogi = "pierogi zbojnickie";
    $price2 = 12.90;
    $count1 = 4;
    $count2 = 0;
    $koszt = ($price * $count1) + ($price2 * $count2);
    $kmprice = 2.50;
    $distance = 10;
    $delivery = $kmprice * $distance;
?>
    <h1>Twoje Zamowienie</h1>
    <table border="1">
    <tr>
        <th>Nazwa</th>
        <th>Liczba</th>
        <th>Cena</th>
    </tr>
    <tr>
        <td><?php echo $placek ?></td>
        <td><?php echo $count1 ?></td>
        <td><?php echo number_format($price, 2, ',', '.'); 
?></td>
    </tr>
    <tr>
        <td><?php echo $pierogi ?></td>
        <td><?php echo $count2?></td>
        <td><?php echo number_format($price2, 2, ',', '.'); 
?></td>
    </tr>
    <tr>
        <td>dostawa</td>
        <td>-</td>
        <td>
            <?php if ($count2 > 0) {
            echo "-";
            }
            else if ($count2 <= 0) {
                echo number_format($delivery, 2, ',', '.');
            }
            ?>
</tr>
    <tr>
        <td>rabat</td>
        <td>-</td>
        <td><?php if ($count1 + $count2 < 3) {
            echo "-";
        }
        else if ($count1 + $count2 == 3) {
            $rabat = -0.1 * $koszt;
            echo number_format($rabat, 2, ',', '.');
            echo " zł";
        }
        else if ($count1 + $count2 >=4) {
            $rabat = -0.2 * $koszt;
            echo number_format($rabat, 2, ',', '.');
            echo " zł";
        }
?></td>
    </tr>
    <tr>
        <td>do zapłaty</td>
        <td>-</td>
        <td><?php if ($count2 > 0){
            echo $koszt + $rabat;
        }
        else if ($count2 <= 0){
            echo number_format($koszt + $delivery + $rabat, 2, ',', '.');
        }
?></td>
    </tr>
    
</table>
    <h1>Dziekujemy!</h1>
    <p><?php if ($count2 > 0){
        echo "Skorzystales z promocji <strong> dostawa gratis!";
    }
    else if ($count2 <= 0){
        echo "Niestety nie skorzystales z naszej promocji :(";
    }
     ?>
</body>
</html>

