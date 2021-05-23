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
    $_apel_ = 10;
    $_banaan_ = 15;

?>

<ul>
    <li><?php if($_apel_==$_banaan_){
    echo "A is gelijk aan B";
} ?></li>
    <li><?php 
if($_apel_!=$_banaan_){
    echo "A is niet gelijk aan B";
}
?></li>
    <li><?php if($_apel_ < $_banaan_){
    echo "aantal a is kleiner dan b";
}
?></li>
    <li><?php 
if($_apel_ <= $_banaan_){
    echo "aantal a is kleiner dan of gelijk aan b";
}?></li>
    <li><?php if($_apel_ > $_banaan_){
    echo "aantal a is groter dan b";
}?></li>
    <li><?php if($_apel_ >= $_banaan_){
    echo "aantal a is gelijk aan of groter dan b";
}?></li>
    <li><?php if($_apel_ <=> $_banaan_){
    echo "spaceship";
}?></li>
</ul>
</body>
</html>