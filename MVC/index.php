<?php
require_once 'controller/controller.php';
$action=$_GET['action'];
switch($action){
    case 'movies':
        $title='Films';
        showMovies();
        break;
    case 'concerts':
        $title='Concerts';
        showConcerts();
        break;
    default:
        $title='Home';
        require_once "view/home.php";
        break;
}

?>


