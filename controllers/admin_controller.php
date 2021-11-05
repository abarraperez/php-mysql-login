<?php

    include _PATH.'views/layout/app.layout.php';
    include _PATH.'models/User.php';

    if(isset($_SESSION['user']) && $_SESSION['user'] != ""){
        $user = $_SESSION['user'];
    }else {
        header('Location: index.php');
    }

    if( isset( $_GET['action']) && $_GET['action'] != '' ){
        $action = $_GET['action'];   
    }else {
        $action = 'index';
    }
       

     switch ($action) {
        case 'index': 
            include 'views/adminhome.php';
        break;
        case 'allusers': 
            $users = new User();
            $users =  $users->get_all_users();
            include 'views/users.php';
        break;
        case 'logout': 
            session_destroy();
            header('Location: index.php');
        break;
        case 'default':
            include 'views/adminhome.php';
            
            break;
        }