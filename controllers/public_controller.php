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
            case 'login':
                if(isset($_POST['submit']) && $_POST['submit'] == 'login'){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                   /* $user = $db->getUserByUsername($username); */
                    $user = false;
                    if($user){
                        if(password_verify($password, $user['password'])){
                            $_SESSION['user'] = $user;
                            header('Location: index.php?action=index');
                        }else{
                    $username = '';

                            $password_err = 'Password erroneo';
                        }
                    }else{
                        $username_err = 'Usuario no encontrado';
                        $password_err = '';

                    } 
                }else{
                    $username = '';
                    $password = '';
                    $username_err = '';
                    $password_err = '';
                }
                include 'views/login.php';
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