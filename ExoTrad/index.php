<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$value=20;
$step=3;
$i=0;
while ($i<10){
    if($value>=30){
        echo "<h1>Le nombre vaut".$value."</h1>";
    }else {
        echo "<br>Nombre trop petit";
    }
    $value+=$step;
    $i++;
}
?>
</body>
</html>

