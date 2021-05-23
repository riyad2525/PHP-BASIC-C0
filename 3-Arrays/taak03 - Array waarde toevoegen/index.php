<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
$city = ["Amsterdam", "zandvoort","Den haag", "Lochem", "Rotterdam", "zoetmeer", "Haarlem", "Ede",];
$city[8] = 'Beverwijk';
array_push($city, 'Gouda');

    ?>

<ul>
    <li><?php echo $city[0];?></li>
    <li><?php echo $city[1];?></li>
    <li><?php echo $city[2];?></li>
    <li><?php echo $city[3];?></li>
    <li><?php echo $city[4];?></li>
    <li><?php echo $city[5];?></li>
    <li><?php echo $city[6];?></li>
    <li><?php echo $city[7];?></li>
    <li><?php echo $city[8];?></li>
    <li><?php echo $city[9];?></li>
</ul>


</body>
</html>