<?php
    /*
    if( NULL!== $_GET['action'] && $_GET['action'] != ''){
        $action = $_GET['action'];
    }else{
        $action = 'home';
    }*/
    include _PATH.'views/layout/layout.php';
    include _PATH.'models/User.php';
    switch ($action) {
        case 'index': 
               include 'views/home.php';
            break;
            case 'login':
               
                if(isset($_POST['submit']) && $_POST['submit'] == 'login'){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $u = new User();
                    $user = (object) $u->get_user_by_username("admin");
                   
                    if($user){
                        if($user->password == sha1(md5($password)) ){
                            $_SESSION['user'] = $user;
                            header('Location: index.php?controller=admin');
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
       
        default:
               include _PATH.'views/404.php';
            break;
    }

?>