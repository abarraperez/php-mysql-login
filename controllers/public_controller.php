<?php
    /*
    if( NULL!== $_GET['action'] && $_GET['action'] != ''){
        $action = $_GET['action'];
    }else{
        $action = 'home';
    }*/
    include _PATH.'views/layout/layout.php';
    switch ($action) {
        case 'index': 
               include 'views/home.php';
            break;
        case 'logout': 
                session_destroy();
                header('Location: index.php');
            break;
        default:
               include _PATH.'views/404.php';
            break;
    }

?>