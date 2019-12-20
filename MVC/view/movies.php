<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 19.12.2019
 * Time: 10:53
 */
ob_start();
$title="Films";


?>
    <h1>Liste des concerts</h1>
    <h2>Il y a <?= count($listOfmovies) ?> film<?php $nbfilm=count($listOfmovies); if($nbfilm>=2){echo "s";}else {echo " ";}?></h2>
    <table class="table">
        <?php
        foreach ($listOfmovies as $movie){
            echo "<tr>";
            echo"<td>".$movie['title']."</td>";
            echo"<td>".$movie['audio']."</td>";
            echo"<td>".$movie['showtime']."</td>";
            echo "</tr>";

        }
        ?>
    </table>
<?php
$content=ob_get_clean();
require_once 'gabarit.php';
?>