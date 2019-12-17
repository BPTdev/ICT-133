<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
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
function get_date($get){//fonction pour trouver la date en fonction du post
    $date = date('Y-m-d', strtotime($get));
    return $date;
}

$days = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
$day = 0;
$get_from_index=$_POST["dateselec"];
$testday=date("l", strtotime("first day of next month"));
date("t/m/Y", strtotime(date('Y-m')." -1 month"));
$firstday=date('Y-m-01', strtotime(get_date($get_from_index)));
//$nbday=date("d", strtotime("last day of last month"));
$nbday=date("t", strtotime(get_date($get_from_index)));
$nbdaycurrent=date("d", strtotime("last day of this month"));
$decal= date('N', strtotime($firstday));
$daylastmonth=0;
$daynextmonth=0;



echo "<div class=\"month\" id='month'>";
echo "<form>";
echo "<h1>Attention les 2 bouttons ci-dessous ne marchent pas encore...</h1>";
echo "<div id='cmd_l' ><h1><input type=\"submit\" class=\"button\" name=\"prevmonth\" value=\"<\" /><input type=\"submit\" class=\"button\" name=\"nextmonth\" value=\">\" /></h1></div>" . date("F",strtotime(get_date($get_from_index))) . "<br>" . date("o",strtotime(get_date($get_from_index))) ;
echo "</form>";
echo "</div>";
if (isset($_POST['action'])) {//----------------------------------------------
    switch ($_POST['action']) {
        case '<':
            date_modify(get_date($get_from_index), "-1 month");
            break;
        case '>':
            date_modify(get_date($get_from_index), "+1 month");
            break;
    }
}


echo "<ul class=\"weekdays\">";

for ($i = 0; $i <= count($days); $i++) {
    echo "<li>" . $days[$i] . "</li>";
}
echo "</ul>";

echo "<ul class=\"days\">";

//Affiche les jour du mois passé pour completer la premiere semaine du mois present
for ($i = 1; $i<=$nbdaycurrent; $i++) {
    $day++;
    if ($daylastmonth==0){
        for ($z=$nbday-$decal;$z<=$nbday;$z++){
            echo "<li><span class=\"lastmonth\">" . $z . "</span></li>";
        }
        $daylastmonth=2;
    }
//Affiche les jour du mois présent
    if ($day == date_format(get_date($get_from_index), 'd')) {
        echo "<li><span class=\"active\">" . date_format(get_date($get_from_index), 'd') . "</span></li>";
    }else {
        echo "<li>" . $day . "</li>";
    }


}
//Affiche les jour du prochain mois pour completer la derniere semaine du mois present
if ($daynextmonth==0){
    for ($z=1;$z<=date("N", strtotime("last day of this month"))+3;$z++){
        echo "<li><span class=\"lastmonth\">" . $z . "</span></li>";
    }
    $daynextmonth=2;
}
echo "</ul>";
echo "get_date($get_from_index)";
echo "<br><br><br>";

?>
</body>
</html>

