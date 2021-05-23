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
    $abcGetallen =[['a','b','c','d'],[24,56,78,90]];
    
    ?>

<ul>
    <li><?php echo $abcGetallen [0]   [0];
              echo $abcGetallen [1]   [1];?></li>
    <li><?php echo $abcGetallen [0]   [2];
              echo $abcGetallen [1]   [3];?></li>
</ul>

</body>
</html>