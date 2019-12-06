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
 * Date: 28.11.2019
 * Time: 11:57
 */
$nom=array("Fabien","David","Miguel","Benoît","Johnny","Kevin","Christopher","Dmitri","etc...");
echo "<h1>SI-CMI2a</h1>";
echo "<ul>";
for ($i=1;$i<=8;$i++){
  echo"<li id=\"div".$i."\">";
  echo "$nom[$i]";
  echo "</li>";
}
echo "</ul>";
?>
</body>
</html>
