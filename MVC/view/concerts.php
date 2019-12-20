<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 19.12.2019
 * Time: 10:53
 */
ob_start();
$title="Concerts";


?>
    <h1>Liste des concerts</h1>
    <h2>Il y a <?= count($listOfconcerts) ?> film<?php $nbfilm=count($listOfconcerts); if($nbfilm>=2){echo "s";}else {echo " ";}?></h2>
    <table style="width: 90%" class="table table-striped table-bordered">
        <?php
        foreach ($listOfconcerts as $concert){
            echo"<tr><td>".$concert['band']."</td><td>".$concert['date']."</td></tr>";
        }
        ?>
    </table>
<?php
$content=ob_get_clean();
require_once 'gabarit.php';
?>