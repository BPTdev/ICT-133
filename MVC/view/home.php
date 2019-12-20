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
    <table style="text-align: center">
        <tr>
            <td>
        <a href="?action=movies"><img src='images/movies.jpg' width="450px" alt=''></a>
            </td>
            <td>
        <a href="?action=concerts"><img src='images/concerts.jpg' width="450px" alt=''></a>
            </td>
        </tr>
    </table>
<?php
$content=ob_get_clean();
require_once 'gabarit.php';
?>