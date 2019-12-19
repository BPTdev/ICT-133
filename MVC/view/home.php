<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 19.12.2019
 * Time: 10:53
 */
$title="Acceuil";
ob_start();
?>
        <a href="?action=movies"><img src='images/movies.jpg' width="450px" alt=''></a>
        <a href="?action=concerts"><img src='images/concerts.jpg' width="450px" alt=''></a>
<?php
$content=ob_get_clean();
?>