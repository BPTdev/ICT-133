<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 19.12.2019
 * Time: 10:53
 */
ob_start();
$title="Films";
$listOfmovies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']

];

?>
    <h1>Liste des concerts</h1>
    <h2>Il y a <?= count($listOfmovies) ?> flim<?php $nbfilm=count($listOfmovies); if($nbfilm>=2){echo "s";}else {echo " ";}?></h2>
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
?>