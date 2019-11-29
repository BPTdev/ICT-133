<HTML>
<HEAD>
    <STYLE type="text/css">
        h1{	font-weight:		bold;
            text-decoration: 	underline;
            text-align:			center}
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
        }
        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 29.11.2019
 * Time: 14:29
 */
echo"<h1>Puissance 4</h1>";
echo "<table>";
$comp=0;
for ($i=0;$i<=7;$i++){
    echo "<tr>";
    for ($k=0;$k<=7;$k++){
        $comp++;
        if($comp==57){
            echo "<td><img src=\"images/rouge.JPG\"></td>";
        }else if($comp==62){
            echo "<td><img src=\"images/bleu.JPG\"></td>";
        }else {
            echo "<td></td>";
        }

    }
    echo "</tr>";
}
echo "</table>";
?>

</BODY>
</HTML>
