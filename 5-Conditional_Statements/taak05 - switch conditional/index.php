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
    $Level = 5;

    switch ($Level){
        case 5:
            echo "Amazing, you've complete the game!";
            break;
        case 4:
            echo "Fantastic, nearly to finsh!";
            break;
        case 3:
            echo "Well done, keep going!";
            break;
        case 2:
            echo "Good job, move onW";
            break;
        case 1:
            echo "Just finish the first level";
            break;
    }
    ?>
</body>
</html>