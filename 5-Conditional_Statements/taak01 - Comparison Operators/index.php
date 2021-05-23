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

    $mobile = 'Samsung';
    $prijs = 549;

    ?>

    <ul>
        <li><?php var_dump($mobile == $prijs); ?></li>
        <li><?php var_dump($mobile === $prijs); ?></li>
        <li><?php var_dump($mobile != $prijs); ?></li>
        <li><?php var_dump($mobile < $prijs); ?></li>
        <li><?php var_dump($mobile > $prijs); ?></li>
        <li><?php var_dump($mobile >= $prijs); ?></li>
        <li><?php var_dump($mobile <= $prijs); ?></li>
        <li><?php var_dump($mobile <> $prijs); ?></li>
    </ul>

</body>
</html>