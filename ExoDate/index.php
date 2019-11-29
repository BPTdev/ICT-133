<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 21.11.2019
 * Time: 11:36
 */
date_default_timezone_set('Asia/Tokyo');// Pour changer la date
echo "<h1>Asia/Tokyo</h1>";
echo "<ol>";
echo "<li>".date("l d F o")."</li>";
echo "<li>".date("M d S o")."</li>";
echo "<li>".date("d/m/y h:i a")."</li>";
echo "<li>".date("d M o, h:i:s")."</li>";
echo "<li>".date("D, d M o, h:i:s O")."</li>";
echo "</ol>";
echo "==============================================================";
echo "<br>";
echo "Date fictive";
echo "<ol>";
$date = date_create('2019-11-28');
date_modify($date, '+1 day');
echo date_format($date, 'l d F o');
echo "<br>";
echo date_format($date, 'M d S o');
echo "<br>";
echo date_format($date, 'd/m/y h:i a');
echo "<br>";
echo date_format($date, 'd M o, h:i:s');
echo "<br>";
echo date_format($date, 'D, d M o, h:i:s O');
echo "<br>";
?>

</body>
</html>