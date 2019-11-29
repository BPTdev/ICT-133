<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choix Exercice</title>
</head>
<style>
    body{
        text-align: center;
        font-size: 4em;
        background-color: black;
        color: white;
        margin-left: 50px;
        font-family: Impact;
    }
    a{
        color: white;
        transition: 1s;
    }
    a:hover{
        color: aquamarine;
        transition: 1s;

    }
    a:active{
        color: mediumvioletred;
        transition: 1s;
    }
    li{
        color: black;
    }
</style>
<body>
<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 28.11.2019
 * Time: 10:14
 */
echo "<ol>";
$nom=array("ExoDate","ExoTrad","TestClandar",
"ExoBoucleNom","Puissance4","#","#","#","#","#","#","#");
$table=count($nom);
for ($i=0;$i<=$table;$i++){
    if ($nom[$i]=="#"){
        echo "";
    }else {
        echo "<li><a href=\"".$nom[$i]."/index.php\">".$nom[$i]."</a></li>";
    }
}
?>

</body>
</html>