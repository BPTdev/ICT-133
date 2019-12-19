<?php
$action=$_GET['action'];
switch($action){
    case 'movies':
        $title='Films';
        require_once "view/movies.php";
        break;
    case 'concerts':
        $title='Concerts';
        require_once "view/concerts.php";
        break;
    default:
        $title='Home';
        require_once "view/home.php";
        break;
}

require_once 'gabarit.php';

?>


