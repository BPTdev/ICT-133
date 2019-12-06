<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js" type="text/javascript"></script>
    <title>Calendrier</title>
</head>
<body>

<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 05.12.2019
 * Time: 10:01
 */
$days = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
$day = 0;
$date = date_create();
$testday=date("l", strtotime("first day of next month"));
$nbday=date("d", strtotime("last day of next month"));
$decal=0;
echo "<div class=\"month\" id='month'>";
echo "<ul>";
echo "<li>" . date("F") . "<br>" . date("o") . "</li>";
echo "</ul>";
echo "</div>";
echo "<ul class=\"weekdays\">";

for ($i = 0; $i <= count($days); $i++) {
    echo "<li>" . $days[$i] . "</li>";
}
echo "</ul>";
if ($testday=="Monday"){
    $decal=0;
}
if ($testday=="Tuesday"){
    $decal=1;
}
if ($testday=="Wednesday"){
    $decal=2;
}
if ($testday=="Thursday"){
    $decal=3;
}
if ($testday=="Friday"){
    $decal=4;
}
if ($testday=="Saturday"){
    $decal=5;
}
if ($testday=="Sunday"){
    $decal=6;
}

//Boucle pour deplacer
//Marche pas
for ($z=$nbday-$decal;$z==$nbday;$z++){
    echo "<li>" . $z . "</li>";
}
for ($i = 1; $i<=5; $i++) {
    echo "<ul class=\"days\">";
    for ($k = 1; $k <= 7; $k++) {
        $day++;
        if ($day == date_format($date, 'd')) {
            echo "<li><span class=\"active\">" . date_format($date, 'd') . "</span></li>";
        } else {
            echo "<li>" . $day . "</li>";
        }

        /*echo "<li>".date_format($date, 'd')."</li>";
        date_modify($date, '+1 day');
        */
        }
    echo "</ul>";
}
$test=$nbday-$decal;
echo "$test";
?>
</body>
</html>
